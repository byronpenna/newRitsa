<?php
include_once(APPPATH.'controllers/Padre.php');
class Post extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	// urls 
		public function Get($id){
			//http://www.ritsasv.com/?p=2188&json=1
			$json = file_get_contents("http://www.ritsasv.com/?p=".$id."&json=1");
			$obj = json_decode($json);
			$data = array(
				'datos' => $obj 
			);
			$this->load->view("Post/Get.php",$data);
		}
}