<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInstanceAclResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example APACHE
     *
     * @var string
     */
    public $aclType;

    /**
     * @var string[]
     */
    public $actions;

    /**
     * @example Allow
     *
     * @var string
     */
    public $decision;

    /**
     * @example rmq-cn-7e22ody****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipWhitelists;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example Topic
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example test
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'aclType'      => 'aclType',
        'actions'      => 'actions',
        'decision'     => 'decision',
        'instanceId'   => 'instanceId',
        'ipWhitelists' => 'ipWhitelists',
        'regionId'     => 'regionId',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
        'username'     => 'username',
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
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }
        if (null !== $this->decision) {
            $res['decision'] = $this->decision;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->ipWhitelists) {
            $res['ipWhitelists'] = $this->ipWhitelists;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aclType'])) {
            $model->aclType = $map['aclType'];
        }
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }
        if (isset($map['decision'])) {
            $model->decision = $map['decision'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['ipWhitelists'])) {
            if (!empty($map['ipWhitelists'])) {
                $model->ipWhitelists = $map['ipWhitelists'];
            }
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}