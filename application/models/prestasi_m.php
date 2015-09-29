<?php 
	class Prestasi_M extends CI_Model
	{
		//property
		
		public function view_prestasi()
		{
			$this->db->select("*");
			$this->db->from("tbl_prestasi");
			return $this->db->get();
		}
		
		public function insert($nama,$keterangan,$tahun)
		{
			$data = array(
			"nama_prestasi" => $nama,
			"keterangan" => $keterangan,
			"tahun" => $tahun
			);
		$this->db->insert('tbl_prestasi', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_prestasi',$id);
		$this->db->delete('tbl_prestasi');
		}
		public function edit_prestasi($id,$nama,$keterangan,$tahun)
		{
			$data = array(
			"nama_prestasi" => $nama,
			"keterangan" => $keterangan,
			"tahun" => $tahun
			);
		$this->db->where('id_prestasi',$id);
		$this->db->update('tbl_prestasi', $data);
		}
		
		
	}

?>