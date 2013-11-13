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
		if (!$_SESSION['admin_login_flag']) {
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
	
	//ajax表单提交成功的时要调用本方法
	public function ajaxSuccee($message,$navTabId='',$callbackType='',$forwardUrl='',$rel='') {
		$return = array(
			'statusCode'=>'200',
			'message'=>$message,
			'navTabId'=>$navTabId,				//是否需要页面重载
			'rel'=>$rel,						//好像还没有使用上这个参数
			'callbackType'=>$callbackType,		//回调类型：forward和colseCurrent两种，前者需要指定下一个参数
			'forwardUrl'=>$forwardUrl			//callbackType类型为forward时候指定跳转的url地址
		);
		//将PHP的数组转换成json格式，以便web前端JavaScript可以直接使用
		$returnString = json_encode($return);
		//输出返回的json格式数据
		echo $returnString;		
	}
	
	//ajax表单体检失败时要调用本方法
	public function ajaxError() {
	
	}
}

//EDN OF common.class.php