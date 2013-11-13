<?php
/**
* PHPdoc...
* @File login.class.php
* @Encode UTF-8
* @Author admin@stush.cn
* @Date 2013-11-11
*/
class Login extends Action {
	/**
	 * 显示登录页面
	 * login.class.php没有继承common.class.php
	 * 需要单独创建function index
	 */
	public function index() {
		debug(0); //取消调试信息
		$this->display();
	}
	
	//验证用户登录信息
	public function doLogin() {
		//接受登录表单传递的参数
		$uname = trim($_POST['username']);
		$passwd = md5(trim($_POST['password']));
		$captcha = strtoupper(trim($_POST['captcha']));
		
		//判断验证码输入是否正确
 		if ($captcha != $_SESSION['code']) {
 			$this->error('验证码输入错误，请重新输入！',3,'login/index');	//验证码不正确
 		}
 		
		//初始化用户模型
		if (D('users')->isLegalUser($uname,$passwd)) {
			$this->redirect('index/index');	//合法用户进入后台主页
		} else {
			$this->error('用户名或密码错误！',3,'login/index'); //非法用户从新登录
		}		
	}
	
	//用户推出登录
	public function doLogout() {
		setcookie(session_name(), '', time()-1, '/');
		$_SESSION = array();
		session_destroy();	
		$this->success('成功退出登录！',1,'login/index');
	}
	
}



//EDN OF login.class.php