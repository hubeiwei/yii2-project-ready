<?php

namespace api\controllers\base;

use yii\base\Event;
use yii\rest\Controller;
use yii\web\Response;

class BaseController extends Controller
{
    public function init()
    {
        parent::init();

        Event::on(Response::class, Response::EVENT_BEFORE_SEND, function (Event $event) {
            /** @var Response $response */
            $response = $event->sender;
            if ($response->getStatusCode() != 500) {
                $data = [
                    'status' => $response->getStatusCode(),
                    'message' => $response->statusText,
                    'data' => $response->data,
                ];
                $response->data = $data;
            }
        });
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats'] = [
            'application/json' => Response::FORMAT_JSON,
        ];
        return $behaviors;
    }
}
