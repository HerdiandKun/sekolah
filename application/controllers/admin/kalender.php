<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kalender extends CI_Controller {

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
        $this->template->load('template','admin/kalender_v',$arr);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */