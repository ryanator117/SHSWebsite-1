<?php
	session_start();

	$GLOBALS = array(
		'title' => 'Skyview High School',
		'test' => 'awesome'
	);

	//Autoloads classes when needed
	spl_autoload_register(function ($class) {
		require_once 'classes/' . $class . '.php';
	});
?>