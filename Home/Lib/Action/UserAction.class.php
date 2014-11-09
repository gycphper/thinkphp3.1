<?php
/*
*UserAction.class.php
*2014-11-9
*/

class UserAction extends Action{

	//获取用户登录界面
	public function index(){
	
		$this->display();
	}
	
	
	//显示用户注册界面
	public function reg(){
		
		$this->display();
	}
	
	//用户注册
	public function reg_del(){
	
		
	}
	
	//用户登录处理
	public function do_login(){
	
		
	}
	
	//用户退出操作
	public function login_out(){
	
		
	}
}