<?php
/**
* PHPdoc...
* @File login.class.php
* @Encode UTF-8
* @Author admin@stush.cn
* @Date 2013-11-11
*/
class login extends Action {
	/**
	 * 显示登录页面
	 * login.class.php没有继承common.class.php
	 * 需要单独创建function index
	 */
	public function index() {
		debug(0); //取消调试信息
		$this->display();
	}
	
	/**
	 * 验证用户登录信息
	 */
	public function dologin() {
		//接受登录表单传递的参数
		$uname = trim($_POST['username']);
		$passwd = md5(trim($_POST['password']));
		$captcha = strtoupper(trim($_POST['captcha']));

		//判断验证码输入是否正确
 		if ($captcha != $_SESSION['code']) {
 			$this->error('验证码输入错误，请重新输入！',3,'login/index');	//验证码不正确
 		}
 		
		//初始化用户模型
		$user = D('users');
		$result = $user->field('uid')->where(array('uname'=>$uname,'passwd'=>$passwd))->find();
		if (!empty($result)) {
			//设置用户session
			$_SESSION['uname']=$uname;
			$_SESSION['admin_login_flag']=true; //表示后台登录成功了
			
			//进行页面跳转
			$this->redirect('index/index');
		}
		
	}
	
}



//EDN OF login.class.php