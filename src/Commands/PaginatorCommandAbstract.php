<?php

namespace Nece\Gears\Commnads;

use Nece\Gears\CommandAbstract;
use Nece\Gears\Paginator;

/**
 * 返回结果是分页对象的命令
 *
 * @Author nece001@163.com
 * @DateTime 2023-10-05
 */
abstract class PaginatorCommandAbstract extends CommandAbstract
{
    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-10-05
     *
     * @param array $params
     *
     * @return Paginator
     */
    abstract public function execute(array $params): Paginator;
}
