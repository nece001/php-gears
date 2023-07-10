<?php

namespace Nece\Gears;

use Exception;

/**
 * 验证异常
 *
 * @Author nece001@163.com
 * @DateTime 2023-07-10
 */
class ValidateException extends Exception
{
    public function __construct($message, $code = '', $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->code = $code;
    }
}
