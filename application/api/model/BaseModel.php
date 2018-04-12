<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 15:12
 */

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{
    //读取器
    protected function prefixImgUrl($value,$data){
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}