


<?php

	global $db;
	global $conn;
	include 'database.php';

	if(isset($_POST['formlogin'])){
		


		extract($_POST);

		if(!empty($lpseudo) && !empty($lpassword)){
			
			$q = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
			$q->execute(['pseudo' => $lpseudo]);
			$result = $q->fetch();

			if($result == true)
			{

				$hashpassword = $result['password']; // le nom du champ du mot de passe dans la base de données
				if(password_verify($lpassword, $result['password'])){


					$connected_user = $lpseudo;
					echo $connected_user;
					header("Location:listelivre.php");

					

					
				}else{

					echo"mauvais mdp";
				}


			}else
			{
				echo "ce nom de compte est inconnu " . $lpseudo;
			}



		}else{

			echo"veuillez completer l'ensemble des champs";
		}


	}

	

?>

