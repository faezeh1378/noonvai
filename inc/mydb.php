<?php 

	$db = mysqli_connect("localhost", "root", "", "noonvai");

	if(mysqli_connect_errno()){
		echo "Not Connect " . mysqli_connect_error();
	}

	mysqli_set_charset($db, "utf8");

 ?>