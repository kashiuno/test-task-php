<?php

namespace app\modules\credit\requests;

use app\components\requests\RequestDefaultClient;
use yii\httpclient\Response;
use yii\web\NotFoundHttpException;

/**
 * Class GetOneCreditRequest
 * @property string $id
 */
class GetOneCreditRequest extends RequestDefaultClient
{
    private string $_id;

    public function init()
    {
        parent::init();
        $this->setMethod('GET');
    }

    public function send()
    {
        return new class(['id' => $this->_id]) extends Response {

            private int $_id;

            /**
             * @return int
             */
            public function getId(): int
            {
                return $this->_id;
            }

            /**
             * @param int $id
             */
            public function setId(int $id): void
            {
                $this->_id = $id;
            }

            public function getData(): array
            {
                $data = ApiData::data();
                $credit = current(array_filter($data, function($item) {
                    return $item['id'] == $this->getId();
                }));
                if (!$credit) throw new NotFoundHttpException('Кредит не найден');
                else return $credit;
            }
        };
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->_id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->_id = $id;
    }
}