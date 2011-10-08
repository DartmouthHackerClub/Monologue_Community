<?php
include("Request.php");
Request::createRequestForm();
$myRequest = new Request();
$myRequest->addRequirements("Title:Test", "Reader:You");
?>