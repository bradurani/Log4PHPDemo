<?php 
	include 'lib/Log4php/Logger.php';
	
	Logger::configure(array(
			'rootLogger' => array(
			'appenders' => array('default'),
		),
		'appenders' => array(
			'default' => array(
				'class' => 'LoggerAppenderFile',
				'params' => array(
					'file' => '/var/log/demo/main.log',
					'append' => true
				)
			)
		)
	));
	
	$logger = Logger::getLogger("main");
	$logger->info("This is an informational message.");
	$logger->warn("I'm not feeling so good...");
	
	print "Hello World!";