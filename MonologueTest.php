<?php
include("Monologue.php");
include("Database.php");

// Make a new database
$myDatabase = new Database();


if($_POST['type']=='newsearch') {
	$mySearch = $myDatabase->rowsForSearch($_POST['search']);
	// Results
	echo "<br><br><br>\n";
	echo "<b>Results:</b><br>\n";
	echo count($mySearch)." records found.<br><br>";
	if(count($mySearch)) {
		echo "They are:\n<table border=1>";
		echo "\n\t<tr>\n\t\t<td><b>Title</b></td>\n\t\t<td><b>Author</b></td>\n\t</tr>";
		foreach($mySearch as $result ) {
			echo "\n\t<tr>\n\t\t<td><a href='view.php?id="
			.$result->getElement("ID")."'>"
			.$result->getElement("Title")."</a></td>\n\t\t<td>"
			.$result->getElement("Author")."</td>\n\t</tr>";
			//$result->printMonologue();
		}
		echo "\n</table>";
	}
}
else include('SearchForm.html');
?>