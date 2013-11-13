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
		//关闭调试功能，因为使用的是dwz返还的是json格式的数据
		debug(0);
		//接受并处理表单数据
		$data = array(
			'title'=>$_POST['title'],
			'url'=>$_POST['rul'],
			'descr'=>$_POST['descr'],
			'author'=>$_POST['author'],
			'expire'=>time()
		);
		
		//将表单数据插入到数据库总
		if ($flag = D('links')->insertIntoLinks($data)) {
			$this->ajaxSuccee('友情连接添加成功，请刷新管理页面查看！');
		} else {
			$this->ajaxError('友情链接添加失败！');
		}
	}
	
}





//END OF link.class.php
