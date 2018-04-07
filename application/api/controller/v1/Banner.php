<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 10:38
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use think\Validate;
class Banner
{
    //获取banner的id的指定信息
    //$id 为Banner的id号
    public function getBanner($id){
        $data = [
            'id' => $id
        ];
//        $validate = new Validate([
//            'id' => ''
//        ]);
        $validate = new IDMustBePositiveInt();
        $result = $validate->batch()->check($data);
        if($result){

        }else{

        }
    }

}