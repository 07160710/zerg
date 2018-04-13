<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/13
 * Time: 20:26
 */

namespace app\api\service;


class Token
{
    public static function generateToken(){
        $randChark = getRandChar(32);
        $timestamp = $_SERVER['REQUEST_TIME_FLOAT'];
        $salt = config('secure.token_salt');
        return md5($randChark.$timestamp.$salt);
    }
}