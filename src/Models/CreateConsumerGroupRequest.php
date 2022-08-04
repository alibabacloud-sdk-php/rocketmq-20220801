<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest\consumeRetryPolicy;
use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @var consumeRetryPolicy
     */
    public $consumeRetryPolicy;

    /**
     * @var string
     */
    public $deliveryOrderType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'consumeRetryPolicy' => 'consumeRetryPolicy',
        'deliveryOrderType'  => 'deliveryOrderType',
        'remark'             => 'remark',
        'resourceGroupId'    => 'resourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeRetryPolicy) {
            $res['consumeRetryPolicy'] = null !== $this->consumeRetryPolicy ? $this->consumeRetryPolicy->toMap() : null;
        }
        if (null !== $this->deliveryOrderType) {
            $res['deliveryOrderType'] = $this->deliveryOrderType;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumeRetryPolicy'])) {
            $model->consumeRetryPolicy = consumeRetryPolicy::fromMap($map['consumeRetryPolicy']);
        }
        if (isset($map['deliveryOrderType'])) {
            $model->deliveryOrderType = $map['deliveryOrderType'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
