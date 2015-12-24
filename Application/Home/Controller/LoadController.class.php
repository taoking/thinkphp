<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class LoadController extends Controller {
    public function index(){
        $this->display('index');
    }
    
    
    public function upload(){
       $upload = new \Think\Upload();
       $upload->maxSize = 3333333;
       $upload->exts = array('jpg','gif','png','jpeg');
       $upload->savePath= "Public/Uploads/";
       $info = $upload->upload();
       if (!$info){
           $this->error($upload->getError());
       }else{
           $this->success("上传成功");
       }
       
       
    }
}