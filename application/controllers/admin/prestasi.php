<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prestasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('prestasi_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'prestasi';
        $arr['prestasi'] = $this->prestasi_m->view_prestasi();
        $this->template->load('template','admin/prestasi_v',$arr);
    }

    public function add_prestasi() {
        $arr['page'] = 'prestasi';
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$tahun = $this->input->post('tahun');
		$this->prestasi_m->insert($nama,$keterangan,$tahun);
		redirect('admin/prestasi');
	}
     public function delete_prestasi() {
        $id = $this->uri->segment(4);
		$this->prestasi_m->delete($id);
		redirect('admin/prestasi');
    }
      public function edit_prestasi() {
		$id = $this->input->post('id_prestasi');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$tahun = $this->input->post('tahun');	
		$this->prestasi_m->edit_prestasi($id,$nama,$keterangan,$tahun);
		redirect('admin/prestasi');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */