<?php 
include 'server.php';

if(isset($_POST['send'])){
	$name = $_POST['task'];

	//Rcreate  query

	$sql = "INSERT INTO tasks(name) VALUES('$name')";

	$val = $db->query($sql);

	if($val){
		header('location: index.php');
	}
}

 ?>