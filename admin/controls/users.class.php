<?php
/**
* PHPdoc...
* @File users.class.php
* @Encode UTF-8
* @Author admin
* @Date 2013-11-19
*/
class Users extends Common {
	//显示用户列表
	public function index() {
		$this->display();
	}
	
	//处理用户添加请求
	public function doAdd() {
		p($_POST);
	}
}






//END OF users.class.php