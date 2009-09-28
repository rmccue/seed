<?php

$topics = array(
	'test-idea' => array(
		'title' => 'Test Idea',
		'votes' => 1
	),
	'test-idea2' => array(
		'title' => 'Test Idea 2',
		'votes' => 2
	),
	'test-idea3' => array(
		'title' => 'Test Idea 3',
		'votes' => 3
	),
);

$config = array(
	'db' => array(
		'master' => array(
			'dsn' => 'mysql:dbname=seed;host=127.0.0.1',
			'username' => 'root',
			'password' => 'password',
			'prefix' => 'seed_',
		)
	)
);