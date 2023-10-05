<?php

namespace Nece\Gears\Commands;

use Nece\Gears\CommandAbstract;

/**
 * 返回结果是布尔值的命令
 *
 * @Author nece001@163.com
 * @DateTime 2023-10-05
 */
abstract class BoolCommandAbstract extends CommandAbstract
{
    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-10-05
     *
     * @param array $params
     *
     * @return bool
     */
    abstract public function execute(array $params): bool;
}
