<?php
include_once(APPPATH.'controllers/Padre.php');
class Post extends CI_Controller
{
	private $_model;
	function __construct()
	{
		parent::__construct();
		$this->load->model("wordpress/modelos/ModelPost");
		$this->_model = new ModelPost();
	}
	// urls 
		public function getPost($anio,$mes,$dia,$titulo)
		{
			
			$fecha = $anio."-".$mes."-".$dia;
			//echo $fecha." ".$titulo."<br>";
			$resultado = $this->_model->get($titulo,$fecha);
			$data = array('post' => $resultado );
			$this->load->view("Post/GetPosts.php",$data);
		}
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