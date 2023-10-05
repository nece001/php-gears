<?php

namespace Nece\Gears\Commands;

use Nece\Gears\CommandAbstract;

/**
 * 返回结果是字符串的命令
 *
 * @Author nece001@163.com
 * @DateTime 2023-10-05
 */
abstract class StringCommandAbstract extends CommandAbstract
{
    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-10-05
     *
     * @param array $params
     *
     * @return string
     */
    abstract public function execute(array $params): string;
}
