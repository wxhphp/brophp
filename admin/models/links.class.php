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
	public function getConfirmedLinks($offset,$limit,$like=NULL) {
		if (is_null($like)) {
			$like = "title like '%%'";
		} else {
			$like = "title like '%$like%'";
		}
		$data = $this->field('*')->where($like)->limit($offset,$limit)->select();
		$total = $this->field('count(*) as total')->where($like)->find();
		$data['total'] = $total['total'];
		return $data;
	}
	
	//获取审核没有通过或者没有审核的连接
	public function getNoPassedLinks() {
		$arr = $this->field('*')->find();
		return $arr;
	}
	
	/**
	 * 
	 * 向Links表中插入友情链接记录，要求$arr数组是表的字段做键
	 * @param array $arr
	 * @param mixed $autoId		可选参数，当传递true的时候表示返还最后插入的自增Id
	 * @return	-1; //表示传递的数组参数为空，失败
	 * 			-2; //表示插入数据库失败
	 * 			1; //表示操作成功
	 */
	public function insertIntoLinks(array $arr,$autoId='') {
		//判断数组是否为空
		if (empty($arr)) {
			return -1; //表示传递的数组参数为空，失败
		}
		$newId = $this->insert($arr);
		
		if (false === $newId) {
			return -2; //表示插入数据库失败
		} else if (true == $autoId) {
			return $newId; //表示返还最后插入的自增Id
		} else {
			return 1; //表示操作成功
		}
	}
	
}





//END OF links.class.php