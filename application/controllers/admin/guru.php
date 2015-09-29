<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('guru_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'guru';
        $arr['guru'] = $this->guru_m->view_guru();
        $this->template->load('template','admin/guru_v',$arr);
    }

    public function add_guru() {
        $arr['page'] = 'guru';
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$nip = $this->input->post('nip');
		$email = $this->input->post('email');
		$tl = $this->input->post('tl');
		$tgl = $this->input->post('tgl');
		$tgl = date("Y-m-d",strtotime($tgl));
		$this->guru_m->insert($nama,$keterangan,$nip,$email,$tl,$tgl);
		redirect('admin/guru');
	}
     public function delete_berita() {
        $id = $this->uri->segment(4);
		$this->guru_m->delete($id);
		redirect('admin/guru');
    }
	 public function edit_guru() {
		$id = $this->input->post('id_guru');
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$nip = $this->input->post('nip');
		$email = $this->input->post('email');
		$tl = $this->input->post('tl');
		$tgl = $this->input->post('tgl');
		$tgl = date("Y-m-d",strtotime($tgl));
		$this->guru_m->edit_guru($id,$nama,$keterangan,$nip,$email,$tl,$tgl);
		redirect('admin/guru');
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */