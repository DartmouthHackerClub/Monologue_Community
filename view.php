<?php
include("Monologue.php");
include("Database.php");

$myDatabase = new Database();
$mySearch = $myDatabase->rowsForSearch(array(ID=>$_GET['id']));
foreach($mySearch as $result) {
	$result->printMonologue();
}

?>