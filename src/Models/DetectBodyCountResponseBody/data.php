<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectBodyCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 6
     *
     * @var int
     */
    public $personNumber;
    protected $_name = [
        'personNumber' => 'PersonNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personNumber) {
            $res['PersonNumber'] = $this->personNumber;
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
        if (isset($map['PersonNumber'])) {
            $model->personNumber = $map['PersonNumber'];
        }

        return $model;
    }
}
