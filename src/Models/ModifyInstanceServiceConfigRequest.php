<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceServiceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configureName;

    /**
     * @var string
     */
    public $configureValue;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var bool
     */
    public $restart;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'configureName'  => 'ConfigureName',
        'configureValue' => 'ConfigureValue',
        'parameters'     => 'Parameters',
        'restart'        => 'Restart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->configureName) {
            $res['ConfigureName'] = $this->configureName;
        }
        if (null !== $this->configureValue) {
            $res['ConfigureValue'] = $this->configureValue;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceServiceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConfigureName'])) {
            $model->configureName = $map['ConfigureName'];
        }
        if (isset($map['ConfigureValue'])) {
            $model->configureValue = $map['ConfigureValue'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        return $model;
    }
}
