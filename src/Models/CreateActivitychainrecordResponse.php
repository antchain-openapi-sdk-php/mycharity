<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\MYCHARITY\Models;

use AlibabaCloud\Tea\Model;

class CreateActivitychainrecordResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 上链成功后返回，链上hash值
    /**
     * @var string
     */
    public $chainHash;

    // true表示颁发了徽章，false表示未颁发徽章
    /**
     * @var bool
     */
    public $awardBadgeFlag;
    protected $_name = [
        'reqMsgId'       => 'req_msg_id',
        'resultCode'     => 'result_code',
        'resultMsg'      => 'result_msg',
        'chainHash'      => 'chain_hash',
        'awardBadgeFlag' => 'award_badge_flag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->chainHash) {
            $res['chain_hash'] = $this->chainHash;
        }
        if (null !== $this->awardBadgeFlag) {
            $res['award_badge_flag'] = $this->awardBadgeFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateActivitychainrecordResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['chain_hash'])) {
            $model->chainHash = $map['chain_hash'];
        }
        if (isset($map['award_badge_flag'])) {
            $model->awardBadgeFlag = $map['award_badge_flag'];
        }

        return $model;
    }
}
