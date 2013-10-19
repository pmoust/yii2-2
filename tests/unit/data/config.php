<?php
return [
	'databases' => [
		'cubrid' => [
			'dsn' => 'cubrid:dbname=demodb;host=localhost;port=33000',
			'username' => 'dba',
			'password' => '',
			'fixture' => __DIR__ . '/cubrid.sql',
		],
		'mysql' => [
			'dsn' => 'mysql:host=127.0.0.1;dbname=yiitest',
			'username' => 'travis',
			'password' => '',
			'fixture' => __DIR__ . '/mysql.sql',
		],
		'sqlite' => [
			'dsn' => 'sqlite::memory:',
			'fixture' => __DIR__ . '/sqlite.sql',
		],
		'sqlsrv' => [
			'dsn' => 'sqlsrv:Server=localhost;Database=test',
			'username' => '',
			'password' => '',
			'fixture' => __DIR__ . '/mssql.sql',
		],
		'pgsql' => [
			'dsn' => 'pgsql:host=localhost;dbname=yiitest;port=5432;',
			'username' => 'postgres',
			'password' => 'postgres',
			'fixture' => __DIR__ . '/postgres.sql',
<<<<<<< HEAD
		],
	],
];
=======
		),
		'redis' => array(
			'dsn' => 'redis://localhost:6379/0',
			'password' => null,
		),
	),
);
>>>>>>> 2339313bf31232c059ab9b0655b49654c36024c1
