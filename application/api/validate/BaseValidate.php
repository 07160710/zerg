<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/7
 * Time: 16:46
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if(!$result){
            $e = new ParameterException([
                'msg' => $this->error
            ]);
            throw $e;
        }
        else{
            return true;
        }
    }
    protected function isPositiveInteger( $value, $rule = '', $data = '', $field = ''){
        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }else{
            return false;
//            return $field."必须是正整数";
        }
    }

    protected function isNotEmpty($value,$rule = '',$data = '',$field = '')
    {
        if(empty($value)){
            return false;
        }else{
            return true;
        }
    }
}