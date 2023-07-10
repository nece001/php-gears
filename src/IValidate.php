<?php

namespace Nece\Gears;

/**
 * 验证接口
 *
 * @Author nece001@163.com
 * @DateTime 2023-07-10
 */
interface IValidate
{
    /**
     * 验证数据
     *
     * @Author nece001@163.com
     * @DateTime 2023-07-10
     *
     * @param array $data 数据
     * @param array $rules 验证规则数组
     * @param array $message 提示信息
     * @param bool $batch 是否批量验证
     * 
     * @throws ValidateException
     */
    public function validate(array $data, array $rules, array $message = [], bool $batch = false);
}
