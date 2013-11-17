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
		$pagesize = 2;
		$page = empty($_POST['pageNum']) ? 1 : $_POST['pageNum'];
		
		$this->assign('numPerPage', $pagesize); //每页显示多少条
		$this->assign('currentPage',$page); //当前第几页
		
		$offset = ($page-1)*$pagesize;
		$limit = $pagesize;
		$like = empty($_POST['keywords']) ? NULL : $_POST['keywords'];
		//获取审核通过的友情连接数据和满足条件的记录总条数
		$data = D('links')->getConfirmedLinks($offset,$limit,$like);
		
		$total = $data['total'];
		unset($data['total']); //使用完之后在赋值给模版前要删除掉
		$this->assign('totalCount', $total); //总条数
		
		//设置搜索关键字
		$this->assign('keywords',$like);	
		
		$this->assign('links',$data);		
		$this->display();
	}
	
	//处理友情连接添加操作
	public function doAdd() {
		//关闭调试功能，因为使用的是dwz返还的是json格式的数据
		debug(0);
		//接受并处理表单数据
		$data = array(
			'title'=>$_POST['title'],
			'url'=>$_POST['url'],
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
	
	//显示修改页面
	public function modify() {
		$id = $_GET['lid'];
		$data = D('links')->getLinkDataById($id);
		$this->assign('links',$data);
		$this->display();
	}
	
	public function doModify() {
		$data = $_POST;
		D('links')->updateLinks($data);
		//输出提示信息
		$this->ajaxSuccee('友情连接修改成功，请刷新管理页面查看！','linkmodify','colseCurrent');
	}
}





//END OF link.class.php
