<?php

use Illuminate\Database\Capsule\manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'database' => 'learnmvc',
	'username' => 'root',
	'password' => 'bh5h672h85',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();