<?php
namespace Home\Controller;
use Think\Controller;
class ZhengzeController extends Controller {
    public function index(){
        if (I('get.username')){
        $username = $_REQUEST['username'];
        
        
        
        
        $validator = array(
            "email"=>'/^([.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\\.[a-zA-Z0-9_-])+/',
            "phone"=>'/^(([0-9]{2,3})|([0-9]{3}-))?((0[0-9]{2,3})|0[0-9]{2,3}-)?[1-9][0-9]{6,7}(-[0-9]{1,4})?$/',
            "mobile"=>'/^1[0-9]{10}$/',
            "url"=>'/^http:(\\/){2}[A-Za-z0-9]+.[A-Za-z0-9]+[\\/=?%-&_~`@\\[\\]\':+!]*([^<>\"\"])*$/',
            "currency"=>'/^[0-9]+(\\.[0-9]+)?$/',
            "number"=>'/^[0-9]+$/',
            "zip"=>'/^[0-9][0-9]{5}$/',
            "qq"=>'/^[1-9][0-9]{4,8}$/',
            "integer"=>'/^[-+]?[0-9]+$/',
            "integerpositive"=>'/^[+]?[0-9]+$/',
            "double"=>'/^[-+]?[0-9]+(\\.[0-9]+)?$/',
            "doublepositive"=>'/^[+]?[0-9]+(\\.[0-9]+)?$/',
            "english"=>'/^[A-Za-z]+$/',
            "chinese"=>'/^[\x80-\xff]+$/',
            "username"=>'/^[\\w]{3,}$/',
            "nochinese"=>'/^[A-Za-z0-9_-]+$/',
            "test"=>'/^[A-Za-z0-9_-]$/',
            "test2"=>'/^[1-0][0-9]{5,10}$/',
            "test3"=>'/^$/',
            "test4"=>'/^\s+$/',
            "test5"=>'/^\S+$/',
            "test6"=>'/^\w+$/',
            "test7"=>'/^\W+$/',
            "test8"=>'/^$/',
            "test9"=>'/^$/',
            "test10"=>'/^$/',
            "test11"=>'/^$/',
            "test12"=>'/^$/',
        );
        
        header("Content-Type:text/html; charset=utf-8");
        if (preg_match($validator['test7'],$username)){
            $this->ajaxReturn(array('result'=>'chenggong'));
        }else{
            $this->ajaxReturn(array('result'=>'shibai'));
        }
        }else{
        $this->display('index');
        }
    }
}