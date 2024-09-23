<?php 
include("functions.php");

$cfs = getByCountry("Pakistan");

foreach($cfs AS $cf){
	echo $cf['fname'] ." ". $cf['lname'] . "<br>";
}

?>