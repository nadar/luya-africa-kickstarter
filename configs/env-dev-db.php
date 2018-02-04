<?php
$config = parse_ini_file('/home/devch/private/africa.ini'); // store your db login in a secure, not public location on your server.

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=' . $config['servername'] . ';dbname=' . $config['dbname'],
            'username' => $config['username'],
            'password' => $config['password'],
            'charset' => 'utf8',

            // in productive environments you can enable the schema caching
            // 'enableSchemaCache' => true,
            // 'schemaCacheDuration' => 43200,
        ]
    ]
];
