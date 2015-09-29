<?php 
	class Berita_Kelas_M extends CI_Model
	{
		public function view_berita_kelas()
		{
			$this->db->select("*");
			$this->db->join("tbl_kelas as k","k.id_kelas = bk.id_kelas","left");
			$this->db->from("tbl_berita_kelas as bk");
			return $this->db->get();
		}
		public function insert($judul,$isi,$tanggal,$kelas,$slug)
		{
			$data = array(
			"judul" => $judul,
			"isi_berita" => $isi,
			"tanggal_berita_kelas" => $tanggal,
			"id_kelas" => $kelas,
			"slug_berita_kelas" => $slug
			);
		$this->db->insert('tbl_berita_kelas', $data);
		}
		public function delete($id)
		{
		$this->db->where('id_berita_kelas',$id);
		$this->db->delete('tbl_berita_kelas');
		}
		
		public function edit_berita($id,$judul,$isi,$tanggal,$kelas,$slug)
		{
			$data = array(
			"judul" => $judul,
			"isi_berita" => $isi,
			"tanggal_berita_kelas" => $tanggal,
			"id_kelas" => $kelas,
			"slug_berita_kelas" => $slug
			);
		$this->db->where('id_berita_kelas',$id);
		$this->db->update('tbl_berita_kelas', $data);
		}
	}

?>