<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'pengguna';
        $arr['pengguna'] = $this->user_m->view_user();
        $arr['kelas'] = $this->user_m->view_kelas();
        $this->template->load('template','admin/pengguna_v',$arr);
    }

    public function add_pengguna() {
        $arr['page'] = 'pengguna';
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$telp = $this->input->post('telp');
		$tipe = $this->input->post('tipe_pengguna');
		$id_kelas = $this->input->post('kelas');
		$this->user_m->insert($nama,$username,$email,$telp,$tipe,$id_kelas);
		redirect('admin/pengguna');
	}

     public function edit_user() {
		$id = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$status = $this->input->post('status');		
		$tipe = $this->input->post('tipe');		
		$this->user_m->edit_user($id,$nama,$alamat,$telp,$email,$username,$status,$tipe);
		redirect('admin/pengguna');
    }
    
     public function block_user() {
        // Code goes here
    }
    
     public function delete_user() {
        $id = $this->uri->segment(4);
		$this->user_m->delete($id);
		redirect('admin/pengguna');
    }
    
    
    
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */