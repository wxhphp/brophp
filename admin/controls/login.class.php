<?php
/**
 * 
 * @author stush.cn
 *
 */
class login extends Action {
	/**
	 * 显示登录页面
	 * login.class.php没有继承common.class.php
	 * 需要单独创建function index
	 */
	public function index() {
		$this->display();
	}
	
	/**
	 * 验证用户登录信息
	 */
	public function dologin() {
// 		p($_POST);
		//接受登录表单传递的参数
		$user = trim($_POST['username']);
		$passwd = md5(trim($_POST['password']));
		$captcha = trim($_POST['captcha']);
		
		//判断验证码输入是否正确
// 		if ($captcha != $_SESSION['captcha']) {
// 			$this->error('验证码输入错误，请重新输入！',3,'login/index');	//验证码不正确
// 		}
		
		//初始化用户模型
		$user = D('user');
		$user->field('uid')->where(array('uname'=>$user,'passwd'=>$passwd))->find();
		
		
	}
}

//EDN OF login.class.php