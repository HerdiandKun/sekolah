<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Humas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('humas_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'humas';
        $arr['humas'] = $this->humas_m->view_humas();
        $this->template->load('template','admin/humas_v',$arr);
    }
	
	 public function add_pengumuman() {
        $arr['page'] = 'humas';
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$this->humas_m->insert($judul,$isi,$tanggal,$slug);
		redirect('admin/humas');
	}
     public function delete_pengumuman() {
        $id = $this->uri->segment(4);
		$this->humas_m->delete($id);
		redirect('admin/humas');
    }
	 public function edit_pengumuman() {
		$id = $this->input->post('id_pengumuman');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$this->humas_m->edit_humas($id,$judul,$isi,$tanggal,$slug);
		redirect('admin/humas');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */