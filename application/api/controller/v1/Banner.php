<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 10:38
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;

use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    //获取banner的id的指定信息
    //$id 为Banner的id号
    public function getBanner($id){
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        if(!$banner){
            //throw new BannerMissException();
            throw new Exception('内部错误');
        }
        return $banner;
    }

}