<div class=inscription>
<h1>Inscription</h1>
	<form method="post">
		<input type="text" name="pseudo" id="pseudo" placeholder="votre pseudo"><br/>
		<input type="password" name="password" id="password" placeholder="mot de passe"><br/>
		<input type="password" name="cpassword" id="cpassword" placeholder="confirmer"><br/>
		<input type="submit" name="formsend" id="formsend" value="inscription"><br>
	</form>
</div>

<?php 

		
	global $db;
	include 'database.php';

		
		if(isset($_POST['formsend'])){
			extract($_POST);

			if(!empty($password) && !empty($cpassword) && !empty($pseudo)){

				if($password == $cpassword){

					$options = [ 
					'cost' => 12,


				];

				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

				


				$c = $db->prepare("SELECT pseudo FROM users WHERE pseudo = :pseudo");
				$c->execute([
					'pseudo' => $pseudo
				]);

				$result = $c->rowCount();

				if($result == 0){

				$q = $db->prepare("INSERT INTO users(pseudo,password) VALUES(:pseudo,:password)");  
				$q->execute([

					'pseudo' => $pseudo,
					'password' => $hashpass
				]);

				echo "Le compte a été crée";

			}else{
				echo "Ce pseudo est deja pris !";


			} $db;


		}

				// if(password_verify('vinaigrette22', $hashpass)){

				// 	echo"ok";
				

			}else{
				echo "les champs ne sont pas tous remplis";
			}


		}



?>