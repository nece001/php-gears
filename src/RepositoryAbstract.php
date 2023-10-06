<?php

namespace Nece\Gears;

use Nece\Util\ArrayUtil;

/**
 * 仓储类抽象基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-08-27
 */
abstract class RepositoryAbstract
{
    /**
     * 是否有效查询条件值
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param array $params
     * @param mixed $key
     * @param boolean $allow_empty
     *
     * @return boolean
     */
    protected function hasValue(array $params, $key, $allow_empty = false): bool
    {
        return ArrayUtil::hasValue($params, $key, $allow_empty);
    }

    /**
     * 获取数组的值
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param array $params
     * @param mixed $key
     * @param mixed $default
     *
     * @return mixed
     */
    protected function getValue(array $params, $key, $default = null)
    {
        return ArrayUtil::getValue($params, $key, $default);
    }
}
