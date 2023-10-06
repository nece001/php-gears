<?php

namespace Nece\Gears;

/**
 * 领域命令抽象类
 *
 * @Author nece001@163.com
 * @DateTime 2023-08-27
 */
abstract class CommandAbstract
{
    /**
     * 验证器
     *
     * @var IValidator
     * @Author nece001@163.com
     * @DateTime 2023-07-10
     */
    protected $validator;

    /**
     * 构造
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param IValidator $validate 验证器
     */
    public function __construct(IValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * 命令执行
     *
     * @Author nece001@163.com
     * @DateTime 2023-08-27
     *
     * @param array $params
     *
     * @return mixed
     */
    abstract public function execute(array $params);
}
