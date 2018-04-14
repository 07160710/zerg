<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/14
 * Time: 9:42
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}