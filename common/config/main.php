<?php

$components = array_merge(
    require(__DIR__ . '/components.php'),
    require(__DIR__ . '/db.php')
);

$config = [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
    'components' => $components,
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
];

return $config;
