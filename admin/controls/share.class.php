<?php
/**
 * 共享类 提供公共调用方法
 * @author stush.cn
 *
 */
class Share extends Action {
	/**
	 * 显示验证码的方法
	 */
	public function captcha() {
		echo new vcode();	//使用brophp内置验证码类生成验证码
	}
}