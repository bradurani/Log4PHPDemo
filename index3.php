<?php 
	include 'lib/Log4php/Logger.php';
	
	Logger::configure("logconfig3.xml");
	
	$logger = Logger::getLogger("main");
	$logger->info("This is an informational message.");
	$logger->warn("I'm not feeling so good...");
	
	print "Hello World!";