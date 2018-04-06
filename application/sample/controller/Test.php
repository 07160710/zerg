<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/6
 * Time: 10:47
 */

namespace app\sample\controller;

use think\Request;

class Test
{
    //http://z.cn/sample/test/hello
    //localhost/zerg/public/index.php = z.cn
    //D:\xampp\apache\conf\extra
    //C:\Windows\system32\drivers\etc\hosts
    public function hello(Request $request)
    {
        //依赖注入
        $all = $request->param();
        var_dump($all);
        //Request
        /*
        $all = input('param.name');
        获取全部传的值
        $all = Request::instance()->param();
        获取?后的值
        $all = Request::instance()->get();
        获取Route.php中定义传的值
        $all = Request::instance()->route();
        $id = Request::instance()->param('id');
        $name = Request::instance()->param('name');
        $age = Request::instance()->param('age');
        echo $id;
        echo '|';
        echo $name;
        echo '|';
        echo $age;
        return 'Hello,KAIFENG';
        */
    }
}