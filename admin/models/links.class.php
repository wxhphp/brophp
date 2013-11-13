<?php
/**
* PHPdoc...
* @File links.class.php
* @Encode UTF-8
* @Author wangxihe
* @Date 2013-11-13
*/
class Links {
	//获取审核通过能正常显示的连接
	public function getConfirmedLinks() {
	
	}
	
	//获取审核没有通过或者没有审核的连接
	public function getNoPassedLinks() {
		$arr = $this->field('*')->find();
		return $arr;
	}
	
	
}





//END OF links.class.php