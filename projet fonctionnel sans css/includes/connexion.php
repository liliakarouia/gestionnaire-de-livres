<?php
    //On démarre une nouvelle session
    session_start();
    
?>

<style>
	.connexion{
		width:360px;
		margin:50px auto;
		font:Cambria,"Hoefler Text","Liberation Serif",Times,"Times new Roman",serif;
		border-radius:10px;
		border:2px solid #ccc;
		padding:10px 40px 25px;
		margin-top:70px;

	}
input[type=text], input[type=password]{

	width:99%;
	padding:10px;
	margin-top:8px;
	border:1px solid #ccc;
	padding-left:5px;
	font-size:16px;
	font-family:Cambria,"Hoefler Text","Liberation Serif",Times,"Times new Roman",serif;

}

input[type=submit]{
	width:100%;
	background-color:#F08080;
	color:#fff;
	border:2px solid #F08080;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}




</style>

<div class="connexion">
	<H1 align="center">Connexion</H1>
	<form method="post" style = "text-align:center;">
		<input type="text" name="lpseudo" id="lpseudo" placeholder="votre pseudo"><br/><br/>
		<input type="password" name="lpassword" id="lpassword" placeholder="mot de passe"><br/><br/>
		<input type="submit" name="formlogin" id="formlogin" value = "connexion"><br> 
	</form>
</div>

 <?php include 'connexion_algo.php';

 		if(isset($_POST['formlogin'])){

 		
  		$_SESSION['prenom'] = $lpseudo;
  		}
  ?>
	

