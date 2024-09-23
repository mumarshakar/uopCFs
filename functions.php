<?php

	function getByCountry($country){
		$connect = mysqli_connect("localhost", "root", "", "uopcfs");

		$sql = "SELECT * FROM students WHERE country = '$country'";
		$qr = mysqli_query($connect, $sql);
		while($row = mysqli_fetch_assoc($qr)){
			$data[] = $row; 
		}
		return $data;
	}




?>