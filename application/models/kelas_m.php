<?php 
	class Kelas_M extends CI_Model
	{
		//property
		private $tingkat;
		private $jurusan;
		private $kelas;
		
		public function add_kelas($tingkat,$kelas,$jurusan)
		{
			$data = array(
			"tingkat" => $tingkat,
			"kelas" => $kelas,
			"jurusan" => $jurusan
			);
		$this->db->insert('tbl_kelas', $data);
		}
		public function view_kelas()
		{
			$this->db->select("*");
			$this->db->from("tbl_kelas");
			return $this->db->get();
			
		}
		public function edit_kelas($id,$tingkat,$kelas,$jurusan)
		{
			$data = array(
			"tingkat" => $tingkat,
			"kelas" => $kelas,
			"jurusan" => $jurusan
			);
		$this->db->where('id_kelas',$id);
		$this->db->update('tbl_kelas', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_kelas',$id);
		$this->db->delete('tbl_kelas');
		}
		
	}

?>