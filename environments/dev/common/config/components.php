<?php

$config = [
    'cache' => [
        'class' => 'yii\redis\Cache',
        'redis' => 'redis',
    ],
    'formatter' => [
        // 'nullDisplay' => '',
        'dateFormat' => 'php:Y-m-d',
        'datetimeFormat' => 'php:Y-m-d H:i:s',
    ],
];

return $config;
