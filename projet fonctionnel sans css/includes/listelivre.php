<?php
    //On démarre une nouvelle session
    session_start();
?>
<meta charset="utf-8">

	<?php 
	echo "are you ok?";
	include 'connexion_algo.php';
	?>
<script>
	function loop(){

	}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
				//var commentCount = 2;
			$('input').click(function() {
				var x = $(this).attr('id');
				alert(x);
				var pseudo = "<?php echo $_SESSION['prenom']?>";
				alert(pseudo);
				if (document.getElementById(x).value == "emprunter"){
					alert( "ok ok ok");
					$("#comments").load("emprunter_livre.php",{
						id: x,
						pseudo: pseudo
					});
					document.getElementById(x).value = "rendre";
				}else if(document.getElementById(x).value=="rendre") {
					$("#comments").load("rendre_livre.php",{
						id: x,
						pseudo: pseudo
					});
					document.getElementById(x).value = "emprunter";
				} 


			});
		});
	</script>
<div id="comments">
</div>

	<?php
	echo "Bienvenue sur notre liste de livres " .$_SESSION['prenom']."____";


	
	$l = $db->prepare("SELECT livres,id FROM liste_livres");
	$l->execute();
	$resultat = $l->fetchAll();
	$lines_livres = $l->rowCount();
	
	$m = $db->prepare("SELECT user,id FROM emprunt");
	$m->execute();
	$resultatm = $m->fetchAll();
	$lines = $m->rowCount();
	//echo $lines."____";
	$array_livres_empruntees = array();
	$y = 0;

	 ?> <?php

	
	
	
	while($y<$lines){ 

		if(strtolower($resultatm[$y][0]) == strtolower($_SESSION['prenom'])){
		array_push($array_livres_empruntees,$resultatm[$y][1]);
		var_dump($array_livres_empruntees);
		$y++;
		
	}else{$y++;}
	
	}


	$i=0;
	$u=1;
	$id=0;
	while($i<$lines_livres){
		if(in_array("$u",$array_livres_empruntees)){
		echo $resultat[$i][0];
		?>
		<input type="button" id="<?php echo $i; ?>"  value="rendre"></input><br/>
	<?php }else{echo $resultat[$i][0];?>
	
	<input type="button" id="<?php echo $i; ?>"  name ="button" value="emprunter"></input>

		<br/>		
		<?php
	}
		$i = $i+1;
		$u = $u+1;
	} 
	$_SESSION['lines_livres'] = $lines_livres;
	$_SESSION['resultat'] = $resultat;
	$_SESSION['array_livres_empruntees']=$array_livres_empruntees;
	?>

