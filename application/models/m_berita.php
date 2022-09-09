<?php
class M_berita extends CI_Model {

	public $table ="berita";

	function tampil_berita(){
		$data = $this->db->query("SELECT * FROM berita");
		return $data;
	}
	function save($gambar){
		$data= array(
			'judul'            => $this->input->post('judul',TRUE),
			'artikel'           => $this->input->post('artikel',TRUE),
			'tanggal'  => $this->input->post('tanggal',TRUE),
			'keterangan_gambar'     => $this->input->post('keterangan_gambar',TRUE),
			'gambar'           => $gambar
		);
		$this->db->insert($this->table,$data);
	}
	function update($gambar){
		if (empty($gambar)) {
	//update without foto
			$data= array(
			'judul'            => $this->input->post('judul',TRUE),
			'artikel'           => $this->input->post('artikel',TRUE),
			'tanggal'  => $this->input->post('tanggal',TRUE),
			'keterangan_gambar'     => $this->input->post('keterangan_gambar',TRUE)
			);
		}else{
	//update with foto
			$data= array(
			'judul'            => $this->input->post('judul',TRUE),
			'artikel'           => $this->input->post('artikel',TRUE),
			'tanggal'  => $this->input->post('tanggal',TRUE),
			'keterangan_gambar'     => $this->input->post('keterangan_gambar',TRUE),
			'gambar'           => $gambar
			);
		}
		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
}