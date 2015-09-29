<?php
class Home extends CI_Controller{
    
    function __construct() {
        parent::__construct();
		  $this->load->library('form_validation');
    }
    
    function index()
    {
       if ($this->session->userdata('is_admin_login')) {
		$data['pg']= 'dash';
        $this->template->load('template','admin/home');
        } else {
        $this->load->view('admin/login');
        }
        
    }
	 public function do_login() {
	if ($this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        } else {
            echo $user = $_POST['username'];
            echo $password = $_POST['password'];
			
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/login');
            } else {
                $sql = "SELECT * FROM tbl_user WHERE username = '$user' AND password = md5('$password')";
                $val = $this->db->query($sql);
				echo $val->num_rows();
                if ($val->num_rows()) {
                    foreach ($val->result_array() as $recs => $res) {
                        $this->session->set_userdata(array(
                            'id' => $res['id'],
                            'username' => $res['username'],
							'id_kelas' => $res['id_kelas'],
                            'email' => $res['email'],                            
                            'is_admin_login' => true,
                            'tipe_user' => $res['tipe_user']
                                )
                        );
                    }
                    redirect('admin');
                } else {
                    $err['error'] = '<strong>Access Denied</strong> Invalid Username/Password';
                    $this->load->view('admin/login', $err);
                }
            }
        }
           }
		     public function logout() {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('user_type');
        $this->session->unset_userdata('is_admin_login');   
        $this->session->sess_destroy();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
        redirect('admin/home', 'refresh');
    }
}