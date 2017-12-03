<?php
// 本类由系统自动生成，仅供测试用途
class ApkUrlAction extends Action {
	
	public function index(){
	    $url = file_get_contents('url.txt');
	    //dump($url);exit;
	    Header("Location: $url"); 
	}
	
	
}