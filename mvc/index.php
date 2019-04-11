<?php 
	$userIDnumber = $_POST['userid'];
	
	echo "
	<h1>Virtual Closet Developer Database</h1>
	<form method='POST' action='../model.php'>
	<input type='hidden' id='userid' name='userid' value =". $userIDnumber.">
	<input type='submit' value='Go to Model Page' />
	</form>
	";
	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->invoke();
	

?>