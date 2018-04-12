<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/11
 * Time: 21:39
 */

namespace app\api\model;


use think\Model;

class BannerItem extends Model
{
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}