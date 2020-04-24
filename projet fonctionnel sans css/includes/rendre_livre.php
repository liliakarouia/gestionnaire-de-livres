<?php 

	include 'database.php';


?>





<?php 

	$id = $_POST['id'];
	echo $id;
	$pseudo = $_POST['pseudo'];

	$sqll = "DELETE FROM emprunt WHERE user ='$pseudo' AND id = $id+1";
	mysqli_query($conn,$sqll);

?>
