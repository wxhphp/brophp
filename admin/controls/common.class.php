<?php
/**
 * 后台全局验证类
 * 
 * @author stush.cn
 *
 */
class Common extends Action {
	/**
	 * 进入后台入口后 第一个被调用的方法
	 */
	public function init(){
		if (!$_SESSION['admin_login']) {
			$this->redirect('login/index');
		}
	}	
	
	/**
	 * 数据验证方法
	 */
	public function validate() {
		//1、对$_POST和$_GET传递的数据验证
	}
	
	/**
	 * 显示默认index页面
	 */
	public function index() {
		$this->display();
	}
	
	/**
	 * 显示添加信息表单页面
	 */
	public function add() {
		$this->display();
	}
	
	/**
	 * 显示修改信息表单页面
	 */
	public function modify() {
		$this->display();
	}
}

//EDN OF common.class.php