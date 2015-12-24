<?php
namespace Home\Event;
use Think\Controller;
class IndexEvent  extends Controller {
	
    public function testEvent(){
    	        echo 'hello,event!';
    	        return true;
    }
    
 
}