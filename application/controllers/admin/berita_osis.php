<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita_Osis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('berita_osis_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'berita_osis';
        $arr['view'] = $this->berita_osis_m->view_berita_osis();
        $this->template->load('template','admin/berita_osis_v',$arr);
    }

    public function add_berita_osis() {
        $arr['page'] = 'berita_osis';
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$this->berita_osis_m->insert($judul,$isi,$tanggal,$slug);
		redirect('admin/berita_osis');
    }
	public function delete() {
        $id = $this->uri->segment(4);
		$this->berita_osis_m->delete($id);
		redirect('admin/berita_osis');
    }
	 public function edit_berita_osis() {
		$id = $this->input->post('id_berita_osis');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$this->berita_osis_m->edit_berita($id,$judul,$isi,$tanggal,$slug);
		redirect('admin/berita_osis');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */