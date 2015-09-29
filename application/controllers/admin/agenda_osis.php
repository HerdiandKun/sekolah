<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agenda_Osis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('agenda_osis_m');
         if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function index() {
        $arr['page'] = 'agenda_osis';
        $arr['view'] = $this->agenda_osis_m->view_agenda();
        $this->template->load('template','admin/agenda_osis_v',$arr);
    }

    public function add_agenda_osis() {
        $arr['page'] = 'agenda_osis';
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$this->agenda_osis_m->insert($judul,$isi,$tanggal,$slug);
		redirect('admin/agenda_osis');
    }
	public function delete() {
        $id = $this->uri->segment(4);
		$this->agenda_osis_m->delete($id);
		redirect('admin/agenda_osis');
    }
	 public function edit_agenda_osis() {
		$id = $this->input->post('id_agenda_osis');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$tanggal = $this->input->post('tanggal');
		$slug = strtolower($judul);
		$slug = str_replace(',','',$slug);
		$slug = str_replace(' ','-',$slug);
		$tanggal = date("Y-m-d",strtotime($tanggal));
		$this->agenda_osis_m->edit_berita($id,$judul,$isi,$tanggal,$slug);
		redirect('admin/agenda_osis');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */