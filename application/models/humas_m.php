<?php 
	class Humas_M extends CI_Model
	{
		//property
		
		public function view_humas()
		{
			$this->db->select("*");
			$this->db->from("tbl_humas");
			return $this->db->get();
		}
		public function insert($judul,$isi,$tanggal,$slug)
		{
			$data = array(
			"judul_pengumuman" => $judul,
			"desc_pengumuman" => $isi,
			"tanggal_pengumuman" => $tanggal,
			"slug_pengumuman" => $slug
			);
		$this->db->insert('tbl_humas', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_pengumuman',$id);
		$this->db->delete('tbl_humas');
		}
		
		public function edit_humas($id,$judul,$isi,$tanggal,$slug)
		{
			$data = array(
			"judul_pengumuman" => $judul,
			"desc_pengumuman" => $isi,
			"tanggal_pengumuman" => $tanggal,
			"slug_pengumuman" => $slug
			);
		$this->db->where('id_pengumuman',$id);
		$this->db->update('tbl_humas', $data);
		}
		
	}

?>