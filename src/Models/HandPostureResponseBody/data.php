<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\metaObject;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var metaObject
     */
    public $metaObject;

    /**
     * @var outputs[]
     */
    public $outputs;
    protected $_name = [
        'metaObject' => 'MetaObject',
        'outputs'    => 'Outputs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaObject) {
            $res['MetaObject'] = null !== $this->metaObject ? $this->metaObject->toMap() : null;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['MetaObject'])) {
            $model->metaObject = metaObject::fromMap($map['MetaObject']);
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
