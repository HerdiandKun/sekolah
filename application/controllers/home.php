<?php
	class Home extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			//model
			
		}
		
	public function index(){
			$this->load->view("beranda_v");
		}
	}
	
		
?>
