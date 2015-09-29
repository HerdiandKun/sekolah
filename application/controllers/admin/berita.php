<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('berita_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'berita';
        $arr['berita'] = $this->berita_m->view_berita();
        $this->template->load('template','admin/berita_v',$arr);
    }

    public function add_berita() {
        $arr['page'] = 'berita';
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$this->berita_m->insert($judul,$isi,$tanggal,$slug);
		redirect('admin/berita');
	}
     public function delete_berita() {
        $id = $this->uri->segment(4);
		$this->berita_m->delete($id);
		redirect('admin/berita');
    }
	 public function edit_berita() {
		$id = $this->input->post('id_berita');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$this->berita_m->edit_berita($id,$judul,$isi,$tanggal,$slug);
		redirect('admin/berita');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */