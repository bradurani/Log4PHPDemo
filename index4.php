<?php 
include 'lib/Log4php/Logger.php';

Logger::configure("logconfig4.xml");

$requestLogger = Logger::getLogger("request");
$requestLogger->trace("Received request: " . print_r($_REQUEST, true));

if(!isset($_GET["uid"]))
{
	$securityLogger = Logger::getLogger("security");
	$securityLogger->error("Unauthenitcated user tried to access application!");
	throw new Exception("You are not allowed!");
} else {
	$uid = $_GET["uid"];
}

if(!isset($_GET["pg"]))
{
	$mainLogger = Logger::getLogger("main");
	$mainLogger->warn("pg was not setting, defaulting to page 0");
	$page = 0;
} else {
	$page = $_GET["pg"];
}	



print "Welcome to page {$page} user {$uid}";