<?php
namespace Home\Controller;
use Think\Controller;
use Behavior\ShowPageTraceBehavior;
class IndexController extends Controller {
	
    public function insertModel(){
    	        echo 'hello,world!';    
    }
    public function _before_index(){
//         $ip_class =  new \Org\Net\IpLocation;
//         $ip = get_client_ip();
//         $res = $ip_class->getlocation('113.102.162.102');
//         print_r($res);
        
        
    }
    
    public function index(){
        //echo U('Index/index');//生成访问地址
//          B('Home\Behavior\Test');
//          \Think\Hook::listen('action_begin');
        echo I('get.id');
        $event1 = A('Index','Event');
        $event1->testEvent();
        echo "aa";
        \Think\Build::buildController('Home','User');
        \Think\Build::buildController('Home','Ajax');
        \Think\Build::buildController('Home','Load');
        \Think\Build::buildController('Home','Zhengze');
        \think\Build::buildModel('Home', 'User');
        print_r(C('USER_AUTH_ID'));
//         $data['status']  = 1;$data['content'] = 'content';$this->ajaxReturn($data);
//     	$blogModel = M('Blog');
//     	$data = array(array('title'=>'tao3','content'=>'wangtao','date'=>'aaa'),array('title'=>'tao4','content'=>'wangtao','date'=>'aaa'));
//     	$res = $blogModel->addAll($data);
//     	dump($res);
    }
    //后置操作方法    
    public function _after_index(){
        echo 'after<br/>';    
    }    
    
    public function tao(){
    	$tao = M('Tao');
    	set_time_limit(0);
//    	$res = $tao->select();
		for ($i = 0; $i < 200000; $i++) {
					$tao->name = $this->generateRandomString(7);
					$tao->str = $this->generateRandomString(7);
					$tao->num = $this->generateRandomNum(5);
					$res = $tao->add();
		}
			echo "ok";
    	dump($res);
    }
    
	private function generateRandomString($length = 8) {
		// 密码字符集，可任意添加你需要的字符
//		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$chars = "abcdefghijklmn";
		$random_str = "";
		for($i = 0; $i < $length; $i ++) {
			// 这里提供两种字符获取方式
			// 第一种是使用 substr 截取$chars中的任意一位字符；
			// $random_str .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
			// 第二种是取字符数组 $chars 的任意元素
			$random_str .= $chars [mt_rand ( 0, strlen ( $chars ) - 1 )];
		}
		return $random_str;
	}
    
	private function generateRandomNum($length = 8) {
		// 密码字符集，可任意添加你需要的字符
		$chars = "0123456789";
		$random_str = "";
		for($i = 0; $i < $length; $i ++) {
			// 这里提供两种字符获取方式
			// 第一种是使用 substr 截取$chars中的任意一位字符；
			// $random_str .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
			// 第二种是取字符数组 $chars 的任意元素
			$random_str .= $chars [mt_rand ( 0, strlen ( $chars ) - 1 )];
		}
		return $random_str;
	}
	
	
	public function array_2d_unique(){
		$array = array(array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'3','name'=>'god'),array('id'=>'3','name'=>'god'),array('id'=>'6','name'=>'323'),array('id'=>'5','name'=>'hi'));
		foreach ($array as $key=>$val){
			$array[$key] = $val['id'].'_'.$val['name'];
		}
		$array = array_unique($array);
		foreach ($array as $key2=>$val2){
			$var = explode('_', $val2);
			$array[$key2] = array();
			$array[$key2]['id'] = $var['0'];
			$array[$key2]['name'] = $var['1'];
		}
		print_r($array);
	}
	
	public function array_2d_sort(){
			$array = array();
	}
	
	public function array_2d_n(){
		$array1 = array(array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'3','name'=>'god'),array('id'=>'3','name'=>'god'),array('id'=>'6','name'=>'323'),array('id'=>'5','name'=>'hi'));
		$array2 = array(array('id'=>'5','name'=>'tao'),array('id'=>'7','name'=>'tao'),array('id'=>'9','name'=>'tao'),array('id'=>'11','name'=>'tao'),array('id'=>'13','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'1','name'=>'tao'),array('id'=>'3','name'=>'god'),array('id'=>'3','name'=>'god'),array('id'=>'6','name'=>'323'),array('id'=>'5','name'=>'hi'));
		foreach ($array1 as $value) {
			$key = array_search($value, $array2);
			if(!empty($key)){
				echo $key;
			}
		}
		
	}
	
	public function AlgorithmGossip(){
		$a = array('1','1');
		for ($i = 2;$i<10000;$i++){
			$a[$i] = $a[$i-1]+$a[$i-2];
		}
		print_r($a);
	}
	
	public function gc_action(){
		$a =array('cccc');
		$b = $a;
//		$c = $a;
		$d = $a;
		$a[] = &$a;
//		unset($a);
		xdebug_debug_zval('a');
		xdebug_debug_zval('b');
		echo 8%(-2);
		
		print_r(C());
		$this->display('index');
	}

}