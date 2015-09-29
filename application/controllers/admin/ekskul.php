<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ekskul extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ekskul_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'ekskul';
        $arr['ekskul'] = $this->ekskul_m->view_ekskul();
        $this->template->load('template','admin/ekskul_v',$arr);
    }

    public function add_ekskul() {
        $arr['page'] = 'ekskul';
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$this->ekskul_m->insert($nama,$keterangan);
		redirect('admin/ekskul');
	}
	 public function edit_ekskul() {
		$id = $this->input->post('id_ekskul');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');	
		$this->ekskul_m->edit_ekskul($id,$nama,$keterangan);
		redirect('admin/ekskul');
    }
     public function delete_ekskul() {
        $id = $this->uri->segment(4);
		$this->ekskul_m->delete($id);
		redirect('admin/ekskul');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */