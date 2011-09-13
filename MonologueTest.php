<?php
include("Monologue.php");
include("Database.php");

// Make a new database, search it
$myDatabase = new Database();

$myMonologue = new Monologue(array(
'ID'=>'101',
'MonoKey'=>'a',
'ClassifiedBy'=>'a',
'ClassifiedDate'=>'a',
'ClassifiedYYYYMM'=>'a',
'Reader'=>'a',
'Gender'=>'a',
'Tone'=>'a',
'Age'=>'a',
'WrittenInPeriod'=>'a',
'Quality'=>'a',
'Character'=>'a',
'Profession'=>'a',
'Setting'=>'a',
'Dialect'=>'a',
'Length'=>'a',
'Source'=>'a',
'Title'=>'a',
'Author'=>'a',
'Playwright'=>'a',
'Translation'=>'a',
'Play'=>'a',
'AuthorURL'=>'a',
'BookURL'=>'a',
'QuickID'=>'a',
'Notes'=>'a',
'Setup'=>'a',
'Monologue'=>'a',
'Abstract'=>'a',
'Subjects'=>'a'));

$myDatabase->addMonologue($myMonologue);

$mySearch = $myDatabase->rowsForSearch("a");

// Print results, for testing purposes
echo "<br><br><br>\n";
echo "<b>Results:</b><br>\n";
echo count($mySearch)." records found. ";
if(count($mySearch)) {
	echo "They are:\n<table border=1>";
	echo "\n\t<tr>\n\t\t<td><b>Title</b></td>\n\t\t<td><b>Author</b></td>\n\t</tr><br>";
	foreach($mySearch as $result ) {
		echo "\n\t<tr>\n\t\t<td>".$result->getElement("Title")."</td>\n\t\t<td>".$result->getElement("Author")."</td>\n\t</tr><br>";
	}
	echo "\n</table>";
}

$myMonologue = new Monologue(array(
'ID'=>'101',
'MonoKey'=>'a',
'ClassifiedBy'=>'a',
'ClassifiedDate'=>'a',
'ClassifiedYYYYMM'=>'a',
'Reader'=>'a',
'Gender'=>'a',
'Tone'=>'a',
'Age'=>'a',
'WrittenInPeriod'=>'a',
'Quality'=>'a',
'Character'=>'a',
'Profession'=>'a',
'Setting'=>'a',
'Dialect'=>'a',
'Length'=>'a',
'Source'=>'a',
'Title'=>'a',
'Author'=>'edited',
'Playwright'=>'a',
'Translation'=>'a',
'Play'=>'a',
'AuthorURL'=>'a',
'BookURL'=>'a',
'QuickID'=>'a',
'Notes'=>'a',
'Setup'=>'a',
'Monologue'=>'a.',
'Abstract'=>'a',
'Subjects'=>'a'));

$myDatabase->editMonologue($myMonologue);

$myNewSearch = $myDatabase->rowsForSearch("a");

// Print results, for testing purposes
echo "<br><br><br>\n";
echo "<b>Updated Results:</b><br>\n";
echo count($myNewSearch)." records found. ";
if(count($myNewSearch)) {
	echo "They are:\n<table border=1>";
	echo "\n\t<tr>\n\t\t<td><b>Title</b></td>\n\t\t<td><b>Author</b></td>\n\t</tr><br>";
	foreach($myNewSearch as $result) {
		echo "\n\t<tr>\n\t\t<td>".$result->getElement("Title")."</td>\n\t\t<td>".$result->getElement("Author")."</td>\n\t</tr><br>";
	}
	echo "\n</table>";
}

?>