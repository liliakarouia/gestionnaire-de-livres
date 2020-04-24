<?php
 	
	include 'database.php';
	

?>



<?php
	// $commentNewCount = $_POST['commentNewCount'];
	//$sql = "SELECT * FROM comments";
	//$result = mysqli_query($conn,$sql);
	$id = $_POST['id'];
	$pseudo = $_POST['pseudo'];

	$sql = "INSERT INTO emprunt(user,id) VALUES('$pseudo',$id+1)";
	mysqli_query($conn,$sql);
	?>

