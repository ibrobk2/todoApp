<?php 

$db = new mysqli;
$db->connect("localhost", "root", "", "todo");

if(!$db){
	echo "failed to connect to the database";
}


 ?>