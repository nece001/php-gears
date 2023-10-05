<?php

namespace Nece\Gears\Commnads;

use Nece\Gears\CommandAbstract;

/**
 * 返回结果是整数的命令
 *
 * @Author nece001@163.com
 * @DateTime 2023-10-05
 */
abstract class IntCommandAbstract extends CommandAbstract
{
    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-10-05
     *
     * @param array $params
     *
     * @return integer
     */
    abstract public function execute(array $params): int;
}
