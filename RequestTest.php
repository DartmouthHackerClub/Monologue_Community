<?php
include("Request.php");
Request::createRequestForm();
if(count($_POST)>0) {
	$myRequest = new Request();
	foreach($_POST as $k=>$v) {
		if($v != "null") $myRequest->addRequirements($k.":".$v);
	}
	$myRequest->whatAreTheRequirements();
}
?>