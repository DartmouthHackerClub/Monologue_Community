<?php
include("Request.php");
session_start();
if($_POST['type']=='newrequest') {
	$_SESSION['myRequest'] = new Request();
	foreach($_POST as $k=>$v) {
		$_SESSION['myRequest']->addRequirements($k.":".$v);
	}
	echo "The requirements for your request are:<br><br>";
	$_SESSION['myRequest']->whatAreTheRequirements();
	echo "<form action='RequestTest.php' method='post'>
		<input type=text' name='type' value='confirmrequest' hidden=true>
		<input type='submit' value='Confirm'/>
		</form>";
}
else if($_POST['type']=='confirmrequest') {
	$_SESSION['myRequest']->addRequest();
	echo "Your request:<br><br>";
	echo $_SESSION['myRequest']->whatAreTheRequirements();
	echo "<br> has been processed. Thank you.";
}
else Request::createRequestForm();
?>