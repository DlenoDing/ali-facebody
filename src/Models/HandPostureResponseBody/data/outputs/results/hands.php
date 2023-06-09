<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands\keyPoints;
use AlibabaCloud\Tea\Model;

class hands extends Model
{
    /**
     * @example 0.555
     *
     * @var float
     */
    public $confident;

    /**
     * @var keyPoints[]
     */
    public $keyPoints;
    protected $_name = [
        'confident' => 'Confident',
        'keyPoints' => 'KeyPoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confident) {
            $res['Confident'] = $this->confident;
        }
        if (null !== $this->keyPoints) {
            $res['KeyPoints'] = [];
            if (null !== $this->keyPoints && \is_array($this->keyPoints)) {
                $n = 0;
                foreach ($this->keyPoints as $item) {
                    $res['KeyPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confident'])) {
            $model->confident = $map['Confident'];
        }
        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n                = 0;
                foreach ($map['KeyPoints'] as $item) {
                    $model->keyPoints[$n++] = null !== $item ? keyPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
