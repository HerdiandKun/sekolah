<?php
	class Kelas extends CI_controller {
	
	public function __construct() {
			parent::__construct();
			
			//model
			
		}
		
	public function index(){
			$this->load->view("kelas_v");
		}
	}
	
		
?>
