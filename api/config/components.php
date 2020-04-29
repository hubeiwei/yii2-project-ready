<?php

use api\models\User;
use yii\web\JsonParser;
use yii\web\Response;

$config = [
    'request' => [
        'csrfParam' => '_csrf-api',
        'parsers' => [
            'application/json' => JsonParser::class,
        ]
    ],
    'response' => [
        'format' => Response::FORMAT_JSON,
    ],
    'user' => [
        'identityClass' => User::class,
        'enableSession' => false,
        'loginUrl' => null,
    ],
    'session' => [
        // this is the name of the session cookie used for login on the api
        'name' => 'advanced-api',
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => require __DIR__ . '/route.php',
    ],
];

return $config;
