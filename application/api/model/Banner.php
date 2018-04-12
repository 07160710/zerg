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
//        $result =  Db::query("select * from banner_item where banner_id=?",[$id]);
//        $result = Db::table('banner_item')->where('banner_id', '=' ,$id)->select();
        $result = Db::table("banner_item")
            ->where(function($query) use ($id){
            $query->where('banner_id', '=' ,$id);
        })->select();
        return $result;
    }
}