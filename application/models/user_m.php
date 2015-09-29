<?php 
	class User_M extends CI_Model
	{
		//property
		
		public function insert($nama,$username,$email,$telp,$tipe,$id_kelas)
		{
			$data = array(
			"Nama_user" => $nama,
			"username" => $username,
			"telp_user" => $telp,
			"email_user" => $email,
			"tipe_user" => $tipe,
			"id_kelas" => $id_kelas,
			"password" => md5("12345"),
			);
		$this->db->insert('tbl_user', $data);
		}
		public function view_user()
		{
			$this->db->select("*");
			$this->db->join("tbl_kelas as k","k.id_kelas = u.id_kelas","left");
			$this->db->from("tbl_user as u");
			return $this->db->get();
		}
		public function view_kelas()
		{
			$this->db->select("*");
			$this->db->from("tbl_kelas");
			return $this->db->get();
		}
		public function view_user_by_id($id)
		{
			$this->db->select("*");
			$this->db->from("tbl_user");
			$this->db->where("id_user",$id);
			return $this->db->get();
			
		}
		public function edit_user($id,$nama,$alamat,$telp,$email,$username,$stat,$type)
		{
			$data = array(
			"Nama_user" => $nama,
			"alamat_user" => $alamat,
			"telp_user" => $telp,
			"email_user" => $email,
			"username" => $username,
			"status_user" => $stat,
			"tipe_user" => $type,
			"password" => md5("12345"),
			"tgl_sign_up" => date('Y-m-d')
			);
		$this->db->where('id_user',$id);
		$this->db->update('tbl_user', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_user',$id);
		$this->db->delete('tbl_user');
		}
		public function signup($email,$username,$password,$sebagai){
			$data = array(
			"email_user" => $email,
			"username" => $username,
			"status_user" => "Normal",
			"tipe_user" => $sebagai,
			"password" => $password,
			"tgl_sign_up" => date('Y-m-d')
			);
		$this->db->insert('tbl_user', $data);
		}
		public function cek_username($uname){
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('username',$uname);
			
			return $this->db->get();
		}
		public function update_user($id,$nama,$alamat,$email,$ttl,$jk,$tlp,$ket)
		{
			$data = array(
			"Nama_user" => $nama,
			"alamat_user" => $alamat,
			"telp_user" => $tlp,
			"email_user" => $email,
			"ttl_user" => $ttl,
			"jenis_kelamin" => $jk,
			"detail_user" => $ket,
			);
		$this->db->where('id_user',$id);
		$this->db->update('tbl_user', $data);
		}
	}

?>