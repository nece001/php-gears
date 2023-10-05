<?php

namespace Nece\Gears\Commnads;

use Nece\Gears\CommandAbstract;

/**
 * 无返回结果的命令
 *
 * @Author nece001@163.com
 * @DateTime 2023-10-05
 */
abstract class VoidCommandAbstract extends CommandAbstract
{
    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-10-05
     *
     * @param array $params
     *
     * @return void
     */
    abstract public function execute(array $params): void;
}
