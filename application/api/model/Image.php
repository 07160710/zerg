<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 13:56
 */

namespace app\api\model;


use think\Model;

class Image extends Model
{
    protected $hidden = ['id','from','delete_time','update_time'];

    public function getUrlAttr($value,$data){
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;

    }
}