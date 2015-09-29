<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('kelas_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'kelas';
        $arr['view'] = $this->kelas_m->view_kelas();
        $this->template->load('template','admin/kelas_v',$arr);
    }

    public function add_kelas() {
        $arr['page'] = 'kelas';
		$tingkat = $this->input->post('tingkat');
		$jurusan = $this->input->post('jurusan');
		$kelas = $this->input->post('kelas');
		
		$this->kelas_m->add_kelas($tingkat,$kelas,$jurusan);
		
		$arr['view'] = $this->kelas_m->view_kelas();
       redirect('admin/kelas','refresh');
    }

     public function edit_kelas() {
		$id = $this->input->post('id_kelas');
		$tingkat = $this->input->post('tingkat');
		$jurusan = $this->input->post('jurusan');
		$kelas = $this->input->post('kelas');		
		$this->kelas_m->edit_kelas($id,$tingkat,$kelas,$jurusan);
		redirect('admin/kelas');
    }
    
     public function delete_kelas() {
        $id = $this->uri->segment(4);
		$this->kelas_m->delete($id);
		redirect('admin/kelas');
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */