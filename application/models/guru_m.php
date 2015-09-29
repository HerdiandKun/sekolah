<?php 
	class Guru_M extends CI_Model
	{
		//property
		
		public function view_guru()
		{
			$this->db->select("*");
			$this->db->from("tbl_guru");
			return $this->db->get();
		}
		
		public function insert($nama,$keterangan,$nip,$email,$tl,$tgl)
		{
			$data = array(
			"nama_guru" => $nama,
			"keterangan" => $keterangan,
			"nip" => $nip,
			"email_guru" => $email,
			"tempat_lahir" => $tl,
			"tgl_lahir" => $tgl
			);
		$this->db->insert('tbl_guru', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_guru',$id);
		$this->db->delete('tbl_guru');
		}
		
		public function edit_guru($id,$nama,$keterangan,$nip,$email,$tl,$tgl)
		{
			$data = array(
			"nama_guru" => $nama,
			"keterangan" => $keterangan,
			"nip" => $nip,
			"email_guru" => $email,
			"tempat_lahir" => $tl,
			"tgl_lahir" => $tgl
			);
		$this->db->where('id_guru',$id);
		$this->db->update('tbl_guru', $data);
		}
		
		
	}

?>