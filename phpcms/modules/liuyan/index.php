<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
	function __construct() {
		pc_base::load_app_func('global');
		$siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : get_siteid();
  		define("SITEID",$siteid);
  		$this->db = pc_base::load_model('liuyan_model');
	}
	
	public function add(){
		$data=array();
		$data['username']=$_POST['username'];
		$data['phone']=$_POST['phone'];
		$data['content']=$_POST['content'];
		$result= $this->db->insert($data,true);
		if ($result) {
			header("location:/index.php?m=content&c=index&a=lists&catid=13");
		}
	}
	
	 
 		
	
	
}
?>