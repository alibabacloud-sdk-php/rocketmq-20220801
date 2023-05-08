<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest;

use AlibabaCloud\Tea\Model;

class consumeRetryPolicy extends Model
{
    /**
     * @example DLQ_mqtest
     *
     * @var string
     */
    public $deadLetterTargetTopic;

    /**
     * @example 16
     *
     * @var int
     */
    public $maxRetryTimes;

    /**
     * @example DefaultRetryPolicy
     *
     * @var string
     */
    public $retryPolicy;
    protected $_name = [
        'deadLetterTargetTopic' => 'deadLetterTargetTopic',
        'maxRetryTimes'         => 'maxRetryTimes',
        'retryPolicy'           => 'retryPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deadLetterTargetTopic) {
            $res['deadLetterTargetTopic'] = $this->deadLetterTargetTopic;
        }
        if (null !== $this->maxRetryTimes) {
            $res['maxRetryTimes'] = $this->maxRetryTimes;
        }
        if (null !== $this->retryPolicy) {
            $res['retryPolicy'] = $this->retryPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumeRetryPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deadLetterTargetTopic'])) {
            $model->deadLetterTargetTopic = $map['deadLetterTargetTopic'];
        }
        if (isset($map['maxRetryTimes'])) {
            $model->maxRetryTimes = $map['maxRetryTimes'];
        }
        if (isset($map['retryPolicy'])) {
            $model->retryPolicy = $map['retryPolicy'];
        }

        return $model;
    }
}
