<?php

namespace Nece\Gears;

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
    protected function valid(array $params, $key, $allow_empty = false): bool
    {
        if (isset($params[$key])) {
            if (!is_null($params[$key])) {
                if ($allow_empty) {
                    return true;
                }

                if ($params[$key] !== '') {
                    return true;
                }
            }
        }
        return false;
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
        if (isset($params[$key])) {
            return $params[$key];
        }

        return $default;
    }
}
