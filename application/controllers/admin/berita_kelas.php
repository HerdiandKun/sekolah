<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita_Kelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('berita_kelas_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'berita_kelas';
        $arr['view'] = $this->berita_kelas_m->view_berita_kelas();
        $this->template->load('template','admin/berita_kelas_v',$arr);
    }

    public function add_berita_kelas() {
        $arr['page'] = 'berita_kelas';
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$kelas = $this->input->post('kelas');
		$tanggal = $this->input->post('tanggal');
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$this->berita_kelas_m->insert($judul,$isi,$tanggal,$kelas,$slug);
		redirect('admin/berita_kelas');
    }
	public function delete() {
        $id = $this->uri->segment(4);
		$this->berita_kelas_m->delete($id);
		redirect('admin/berita_kelas');
    }
	 public function edit_berita_kelas() {
		$id = $this->input->post('id_berita_kelas');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$kelas = $this->input->post('kelas');
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$this->berita_kelas_m->edit_berita($id,$judul,$isi,$tanggal,$kelas,$slug);
		redirect('admin/berita_kelas');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */