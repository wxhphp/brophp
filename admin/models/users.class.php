<?php
/**
* 数据表users的模型
* @File users.class.php
* @Encode UTF-8
* @Author wangxihe
* @Date 2013-11-13
*/
class Users{
	//判断是否为合法用户，如果是合法用户为用户设置session信息
	public function isLegalUser($uname,$passwd) {
		$data = $this->field('uid')->where(array('uname'=>$uname,'passwd'=>$passwd))->find();
		if (!empty($data)) { //合法用户，设置用户的session，并返回true
			$_SESSION['uname']=$uname;
			$_SESSION['admin_login_flag']=true; //表示后台登录成功了
			return true;
		} else {  //非法用户直接返回false
			return false;
		}
	}
	
	
}



//END OF users.class.php