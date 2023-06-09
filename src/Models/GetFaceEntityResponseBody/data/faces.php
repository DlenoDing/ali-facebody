<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\GetFaceEntityResponseBody\data;

use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $faceId;
    protected $_name = [
        'faceId' => 'FaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        return $model;
    }
}
