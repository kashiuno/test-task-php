<?php

namespace app\components\requests;

use Yii;
use yii\httpclient\Request;

class RequestDefaultClient extends Request
{
    public function init()
    {
        parent::init();
        $this->client = Yii::$app->get('httpClient');
    }
}