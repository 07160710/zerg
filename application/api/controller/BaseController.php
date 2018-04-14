<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/14
 * Time: 19:34
 */

namespace app\api\controller;

use app\api\service\Token as TokenService;
use think\Controller;

class BaseController extends Controller
{
    protected function checkExclusiveScope()
    {
        TokenService::needExclusiveScope();
    }
    protected function checkSuperScope()
    {
        TokenService::needSuperScope();
    }
    protected function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }
}