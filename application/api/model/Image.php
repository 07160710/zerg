<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/12
 * Time: 13:56
 */

namespace app\api\model;


class Image extends BaseModel
{
    protected $hidden = ['id','from','delete_time','update_time'];

    public function getUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }
}