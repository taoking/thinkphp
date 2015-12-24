<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
    public function index(){
        $this->display('index');
    }
}