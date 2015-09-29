<?php 
	class Ekskul_M extends CI_Model
	{
		//property
		
		public function view_ekskul()
		{
			$this->db->select("*");
			$this->db->from("tbl_ekskul");
			return $this->db->get();
		}
		
		public function insert($nama,$keterangan)
		{
			$data = array(
			"nama_ekskul" => $nama,
			"keterangan" => $keterangan
			);
		$this->db->insert('tbl_ekskul', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_ekskul',$id);
		$this->db->delete('tbl_ekskul');
		}
		public function edit_ekskul($id,$nama,$keterangan)
		{
			$data = array(
			"nama_ekskul" => $nama,
			"keterangan" => $keterangan
			);
		$this->db->where('id_ekskul',$id);
		$this->db->update('tbl_ekskul', $data);
		}
		
	}

?>