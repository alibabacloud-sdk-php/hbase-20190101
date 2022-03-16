<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $preferredBackupEndTimeUTC;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupStartTimeUTC;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupRetentionPeriod'       => 'BackupRetentionPeriod',
        'preferredBackupEndTimeUTC'   => 'PreferredBackupEndTimeUTC',
        'preferredBackupPeriod'       => 'PreferredBackupPeriod',
        'preferredBackupStartTimeUTC' => 'PreferredBackupStartTimeUTC',
        'preferredBackupTime'         => 'PreferredBackupTime',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->preferredBackupEndTimeUTC) {
            $res['PreferredBackupEndTimeUTC'] = $this->preferredBackupEndTimeUTC;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupStartTimeUTC) {
            $res['PreferredBackupStartTimeUTC'] = $this->preferredBackupStartTimeUTC;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['PreferredBackupEndTimeUTC'])) {
            $model->preferredBackupEndTimeUTC = $map['PreferredBackupEndTimeUTC'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupStartTimeUTC'])) {
            $model->preferredBackupStartTimeUTC = $map['PreferredBackupStartTimeUTC'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
