<?php
	
	
	require __DIR__ . '/_bootstrap.php';
	
	//echo Yii::$app->name . PHP_EOL;
	
	$user = new User();
	
	$user->username = 'splaa';
	$user->email = 'splaandrey@gmail.com';
	
	print_r($user->getAttributes());
	
	
	
	