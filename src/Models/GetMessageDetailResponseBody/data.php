<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetMessageDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $body;

    /**
     * @example 123
     *
     * @var int
     */
    public $bodySize;

    /**
     * @example xxx.xx.xxx.xx
     *
     * @var string
     */
    public $bornHost;

    /**
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $bornTime;

    /**
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example xx
     *
     * @var string
     */
    public $messageGroup;

    /**
     * @example 01BE87E485F0C7808C04543CAF00000001
     *
     * @var string
     */
    public $messageId;

    /**
     * @var string[]
     */
    public $messageKeys;

    /**
     * @example xx
     *
     * @var string
     */
    public $messageTag;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $messageType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example xxx.xx.xxx.xx
     *
     * @var string
     */
    public $storeHost;

    /**
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $storeTime;

    /**
     * @var string[]
     */
    public $systemProperties;

    /**
     * @example topic_test
     *
     * @var string
     */
    public $topicName;

    /**
     * @var string[]
     */
    public $userProperties;
    protected $_name = [
        'body'             => 'body',
        'bodySize'         => 'bodySize',
        'bornHost'         => 'bornHost',
        'bornTime'         => 'bornTime',
        'instanceId'       => 'instanceId',
        'messageGroup'     => 'messageGroup',
        'messageId'        => 'messageId',
        'messageKeys'      => 'messageKeys',
        'messageTag'       => 'messageTag',
        'messageType'      => 'messageType',
        'regionId'         => 'regionId',
        'storeHost'        => 'storeHost',
        'storeTime'        => 'storeTime',
        'systemProperties' => 'systemProperties',
        'topicName'        => 'topicName',
        'userProperties'   => 'userProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->bodySize) {
            $res['bodySize'] = $this->bodySize;
        }
        if (null !== $this->bornHost) {
            $res['bornHost'] = $this->bornHost;
        }
        if (null !== $this->bornTime) {
            $res['bornTime'] = $this->bornTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->messageGroup) {
            $res['messageGroup'] = $this->messageGroup;
        }
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }
        if (null !== $this->messageKeys) {
            $res['messageKeys'] = $this->messageKeys;
        }
        if (null !== $this->messageTag) {
            $res['messageTag'] = $this->messageTag;
        }
        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->storeHost) {
            $res['storeHost'] = $this->storeHost;
        }
        if (null !== $this->storeTime) {
            $res['storeTime'] = $this->storeTime;
        }
        if (null !== $this->systemProperties) {
            $res['systemProperties'] = $this->systemProperties;
        }
        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
        }
        if (null !== $this->userProperties) {
            $res['userProperties'] = $this->userProperties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['bodySize'])) {
            $model->bodySize = $map['bodySize'];
        }
        if (isset($map['bornHost'])) {
            $model->bornHost = $map['bornHost'];
        }
        if (isset($map['bornTime'])) {
            $model->bornTime = $map['bornTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['messageGroup'])) {
            $model->messageGroup = $map['messageGroup'];
        }
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }
        if (isset($map['messageKeys'])) {
            if (!empty($map['messageKeys'])) {
                $model->messageKeys = $map['messageKeys'];
            }
        }
        if (isset($map['messageTag'])) {
            $model->messageTag = $map['messageTag'];
        }
        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['storeHost'])) {
            $model->storeHost = $map['storeHost'];
        }
        if (isset($map['storeTime'])) {
            $model->storeTime = $map['storeTime'];
        }
        if (isset($map['systemProperties'])) {
            $model->systemProperties = $map['systemProperties'];
        }
        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }
        if (isset($map['userProperties'])) {
            $model->userProperties = $map['userProperties'];
        }

        return $model;
    }
}