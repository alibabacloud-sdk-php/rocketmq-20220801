<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ListTopicsRequest extends Model
{
    /**
     * @example topic_test
     *
     * @var string
     */
    public $filter;

    /**
     * @var string[]
     */
    public $messageTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 3
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'filter'       => 'filter',
        'messageTypes' => 'messageTypes',
        'pageNumber'   => 'pageNumber',
        'pageSize'     => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }
        if (null !== $this->messageTypes) {
            $res['messageTypes'] = $this->messageTypes;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTopicsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }
        if (isset($map['messageTypes'])) {
            if (!empty($map['messageTypes'])) {
                $model->messageTypes = $map['messageTypes'];
            }
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
