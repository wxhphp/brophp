<?php
/**
* PHPdoc...
* @File link.class.php
* @Encode UTF-8
* @Author admin@stush.cn
* @Date 2013-11-11
*/
class Links extends Common {
	//友情连接默认首页
	public function index() {
		echo time();
	}
	
	//处理友情连接添加操作
	public function doAdd() {
//		debug(0);	//关闭brophp框架中的调试功能
		
		$links = D('links');
		$noPassedLinks = $links->getNoPassedLinks();
		p($noPassedLinks);
		
		//返回ajax请求的处理结果(返回的是json格式)	
		$this->ajaxSuccee('友情连接添加成功，请刷新管理页面查看！');
	}
	
}





//END OF link.class.php
