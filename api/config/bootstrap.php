<?php

use yii\base\Event;
use yii\web\Response;

Event::on(Response::class, Response::EVENT_BEFORE_SEND, function (Event $event) {
    /** @var Response $response */
    $response = $event->sender;
    if ($response->getIsSuccessful()) {
        $data = [
            'status' => 200,
            'message' => '请求成功',
            'data' => $response->data,
        ];
        $response->data = $data;
    }
});
