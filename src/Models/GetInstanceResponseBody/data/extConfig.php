<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class extConfig extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $aclType;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoScaling;

    /**
     * @example 10
     *
     * @var int
     */
    public $flowOutBandwidth;

    /**
     * @example payByBandwidth
     *
     * @var string
     */
    public $flowOutType;

    /**
     * @example enable
     *
     * @var string
     */
    public $internetSpec;

    /**
     * @example 72
     *
     * @var int
     */
    public $messageRetentionTime;

    /**
     * @example rmq.s2.2xlarge
     *
     * @var string
     */
    public $msgProcessSpec;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $sendReceiveRatio;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportAutoScaling;
    protected $_name = [
        'aclType'              => 'aclType',
        'autoScaling'          => 'autoScaling',
        'flowOutBandwidth'     => 'flowOutBandwidth',
        'flowOutType'          => 'flowOutType',
        'internetSpec'         => 'internetSpec',
        'messageRetentionTime' => 'messageRetentionTime',
        'msgProcessSpec'       => 'msgProcessSpec',
        'sendReceiveRatio'     => 'sendReceiveRatio',
        'supportAutoScaling'   => 'supportAutoScaling',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['aclType'] = $this->aclType;
        }
        if (null !== $this->autoScaling) {
            $res['autoScaling'] = $this->autoScaling;
        }
        if (null !== $this->flowOutBandwidth) {
            $res['flowOutBandwidth'] = $this->flowOutBandwidth;
        }
        if (null !== $this->flowOutType) {
            $res['flowOutType'] = $this->flowOutType;
        }
        if (null !== $this->internetSpec) {
            $res['internetSpec'] = $this->internetSpec;
        }
        if (null !== $this->messageRetentionTime) {
            $res['messageRetentionTime'] = $this->messageRetentionTime;
        }
        if (null !== $this->msgProcessSpec) {
            $res['msgProcessSpec'] = $this->msgProcessSpec;
        }
        if (null !== $this->sendReceiveRatio) {
            $res['sendReceiveRatio'] = $this->sendReceiveRatio;
        }
        if (null !== $this->supportAutoScaling) {
            $res['supportAutoScaling'] = $this->supportAutoScaling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclType'])) {
            $model->aclType = $map['aclType'];
        }
        if (isset($map['autoScaling'])) {
            $model->autoScaling = $map['autoScaling'];
        }
        if (isset($map['flowOutBandwidth'])) {
            $model->flowOutBandwidth = $map['flowOutBandwidth'];
        }
        if (isset($map['flowOutType'])) {
            $model->flowOutType = $map['flowOutType'];
        }
        if (isset($map['internetSpec'])) {
            $model->internetSpec = $map['internetSpec'];
        }
        if (isset($map['messageRetentionTime'])) {
            $model->messageRetentionTime = $map['messageRetentionTime'];
        }
        if (isset($map['msgProcessSpec'])) {
            $model->msgProcessSpec = $map['msgProcessSpec'];
        }
        if (isset($map['sendReceiveRatio'])) {
            $model->sendReceiveRatio = $map['sendReceiveRatio'];
        }
        if (isset($map['supportAutoScaling'])) {
            $model->supportAutoScaling = $map['supportAutoScaling'];
        }

        return $model;
    }
}
