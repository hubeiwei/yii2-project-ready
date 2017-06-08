<?php

$components = array_merge(
    require(__DIR__ . '/components.php'),
    require(__DIR__ . '/db.php')// 数据库
);

$config = [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => $components,
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
];

return $config;
