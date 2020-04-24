<?php
	define('HOST','localhost');
	define('DB_NAME','siteweb');
	define('USER','root');
	define('PASS','');

	$conn = mysqli_connect(HOST,USER,PASS,DB_NAME);

	try{

		$db = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connecté > OK !";


	} catch(PDOException $e){
		echo $e;


	}
