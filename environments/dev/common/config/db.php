<?php

$config = [
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=my_db',
        'username' => 'root',
        'password' => '123456',
        'charset' => 'utf8mb4',

        // 表结构缓存
        'enableSchemaCache' => false,
        'schemaCacheDuration' => 3600,
        'schemaCache' => 'cache',

        // 查询缓存
        'enableQueryCache' => true,
        'queryCacheDuration' => 3600,
        'queryCache' => 'cache',
    ],
    'redis' => [
        'class' => 'yii\redis\Connection',
        'hostname' => '127.0.0.1',
        'port' => 6379,
        // 'database' => 0,
    ],
];

return $config;
