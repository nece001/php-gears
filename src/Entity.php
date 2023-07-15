<?php

namespace Nece\Gears;

class Entity
{
    /**
     * 批量设置属性
     *
     * @Author nece001@163.com
     * @DateTime 2023-07-15
     *
     * @param array $attributes 关联数组[name=>value]
     *
     * @return void
     */
    public function setAttributes($attributes)
    {
        foreach ($attributes as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     * 转为数组
     *
     * @Author nece001@163.com
     * @DateTime 2023-07-15
     *
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}
