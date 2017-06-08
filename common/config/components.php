<?php

$config = [
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'formatter' => [
//        'nullDisplay' => '',
        'dateFormat' => 'php:Y-m-d',
        'datetimeFormat' => 'php:Y-m-d H:i:s',
    ],
];

return $config;
