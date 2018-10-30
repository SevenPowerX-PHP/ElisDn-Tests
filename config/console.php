<?php
	use yii\log\FileTarget;
	use yii\caching\FileCache;
	
	/**
	 * Created by PhpStorm.
	 * User: splaa
	 * Date: 30.10.18
	 * Time: 11:47
	 */
	Yii::setAlias('@tests', dirname(__DIR__) . '/tests');
	$params = require __DIR__ . '/params.php';
	$db = require __DIR__ . '/dbSqlite.php';
	$config = [
		'id' => 'console',
		'basePath' => dirname(__DIR__),
		'bootstrap' => ['log'],
		'controllerNamespace' => 'app\commands',
		'components' => [
			'cache' => [
				'class' => FileCache::class,
			],
			'log' => [
				'targets' => [
					[
						'class' => FileTarget::class,
						'levels' => ['error', 'warning'],
					],
				],
			],
			'db' => $db,
		],
		'controllerMap' => [
			'migration' => [
				'class' => 'bizley\migration\controllers\MigrationController',
			],
		],
		'params' => $params,
	];
	return $config;