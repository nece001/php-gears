<?php

namespace Nece\Gears\Commands;

use Nece\Gears\CommandAbstract;

/**
 * 返回结果是对象的命令
 *
 * @Author nece001@163.com
 * @DateTime 2023-10-05
 */
abstract class ObjectCommandAbstract extends CommandAbstract
{
    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-10-05
     *
     * @param array $params
     *
     * @return object
     */
    abstract public function execute(array $params): object;
}
