<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMinorVersionResponseBody extends Model
{
    /**
     * @example 7B8EC240-BB13-4DBC-B955-F90170E82609
     *
     * @var string
     */
    public $requestId;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $upgradingComponents;
    protected $_name = [
        'requestId'           => 'RequestId',
        'upgradingComponents' => 'UpgradingComponents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->upgradingComponents) {
            $res['UpgradingComponents'] = $this->upgradingComponents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeMinorVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpgradingComponents'])) {
            $model->upgradingComponents = $map['UpgradingComponents'];
        }

        return $model;
    }
}
