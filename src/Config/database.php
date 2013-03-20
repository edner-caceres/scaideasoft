<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Postgres',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'postgres',
		'password' => 'postgres',
		'database' => 'scaideasoft',
	);
	public $inventory = array(
		'datasource' => 'Database/postgres',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'postgres',
		'password' => 'postgres',
		'database' => 'scaideasoft',
		'schema' => 'inventory',
	);
	public $shared = array(
		'datasource' => 'Database/Postgres',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'postgres',
		'password' => 'postgres',
		'database' => 'scaideasoft',
		'schema' => 'shared'
	);
}
