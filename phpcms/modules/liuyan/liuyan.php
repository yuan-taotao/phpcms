<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class liuyan extends admin {
	function __construct() {
		parent::__construct();
		
		$this->db = pc_base::load_model('liuyan_model');
	
	}
	//
	public function init(){
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$infos = $this->db->listinfo('','id DESC',$page, $pages = '5');
		// var_dump($infos);
		// var_dump($_SESSION);
		include $this->admin_tpl('liuyan_list');
		
	
	}
	// 显示留言修改页面
	public function edit(){
		$info = $this->db->get_one(array('id'=>$_GET['id']));
		 // var_dump($_SESSION);
		include $this->admin_tpl('liuyan_edit');
		
	}
	// 修改留言内容
	public function update(){
		// var_dump($_GET);
		$data=array();
		$data['content']=$_POST['content'];
		$data['username']=$_POST['username'];

		$result=$this->db->update($data,array('id'=>$_GET['id']));
	}

	// 删除留言
	public function delete(){
		// var_dump($_GET['id']);
		$result = $this->db->delete(array('id'=>$_GET['id']));
		// var_dump($result);
		
	
	}
}
?>