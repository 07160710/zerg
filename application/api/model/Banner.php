<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 19:33
 */

namespace app\api\model;


use think\Db;
use think\Exception;
use think\Model;

class Banner extends Model
{
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
    public static function getBannerByID($id)
    {
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}