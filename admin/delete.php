<?php  
include("../inc/mydb.php"); 

	if(isset($_GET['del'])){
		$delete = $_GET['del'];

		$query = "DELETE FROM products WHERE `products`.`pro_id` = '$delete'";
		$sql = mysqli_query($db, $query);
		if($sql){
			header("location:index.php?delok=2045");
			exit();
		}

	}

?>