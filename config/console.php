<?php
	/**
	 * Created by PhpStorm.
	 * User: splaa
	 * Date: 30.10.18
	 * Time: 11:47
	 */
	Yii::setAlias('@tests', dirname(__DIR__) . '/tests');
	$params = require(__DIR__ . '/params.php');
	$db = require(__DIR__ . '/db.php');
	$config = [
		'id' => 'basic-console',
		'basePath' => dirname(__DIR__),
		'bootstrap' => ['log'],
		'controllerNamespace' => 'app\commands',
		'components' => [
			'cache' => [
				'class' => 'yii\caching\FileCache',
			],
			'log' => [
				'targets' => [
					[
						'class' => 'yii\log\FileTarget',
						'levels' => ['error', 'warning'],
					],
				],
			],
			'db' => $db,
		],
		'params' => $params,
	];
	return $config;