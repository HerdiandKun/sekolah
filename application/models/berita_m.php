<?php 
	class Berita_M extends CI_Model
	{
		//property
		
		public function view_berita()
		{
			$this->db->select("*");
			$this->db->from("tbl_berita");
			return $this->db->get();
		}
		
		public function insert($judul,$isi,$tanggal,$slug)
		{
			$data = array(
			"judul" => $judul,
			"isi_berita" => $isi,
			"tanggal_berita" => $tanggal,
			"slug_berita" => $slug
			);
		$this->db->insert('tbl_berita', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_berita',$id);
		$this->db->delete('tbl_berita');
		}
		
		public function edit_berita($id,$judul,$isi,$tanggal,$slug)
		{
			$data = array(
			"judul" => $judul,
			"isi_berita" => $isi,
			"tanggal_berita" => $tanggal,
			"slug_berita" => $slug
			);
		$this->db->where('id_berita',$id);
		$this->db->update('tbl_berita', $data);
		}
		
	}

?>