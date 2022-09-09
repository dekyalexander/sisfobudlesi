<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('m_berita');
	}
	public function index()
	{
		$x['data'] = $this->m_berita->tampil_berita()->result();
		$this->load->view('daftar_artikel',$x);
	}
	function simpan_post(){
		$this->load->library('form_validation');
        
        $this->form_validation->set_rules('judul','Judul Artikel','required|strip_tags');
        $this->form_validation->set_rules('artikel','Isi Artikel','required|strip_tags');
        $this->form_validation->set_rules('tanggal','Tanggal Update Artikel','required|strip_tags');
        $this->form_validation->set_rules('keterangan_gambar','Keterangan Gambar','required|strip_tags');
        

        if ($this->form_validation->run() !== false) {
            $UploadFoto = $this->upload_foto_artikel();
            $this->m_berita->save($UploadFoto);
            $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Menambahkan data</p>
                </div>');  
            redirect('artikel');
            
        }else{
            $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Gagal </h4>
                    <p>Menambahkan data</p>
                </div>');  
            $this->load->view('dashboard_admin');
            
        }
        
    }
    function upload_foto_artikel(){
        $config['upload_path']    ='./assets/img/';
        $config['allowed_types']  ='jpg|png';
        $config['max_size']       = 1024; // 1mb
        $this->load->library('upload', $config);
        // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }
    function edit(){
        if (isset($_POST['submit'])) {
            $UploadFoto = $this->upload_foto_artikel();
            $this->m_berita->update($UploadFoto);
            $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Merubah data</p>
                </div>');  
            redirect('artikel');
        }else{
            $id          = $this->uri->segment(3);
            $data['artikel'] = $this->db->get_where('berita',array('id' =>$id))->row_array();
            $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Gagal </h4>
                    <p>Merubah data</p>
                </div>');  
            $this->load->view('edit_admin',$data);
        }
    }
    function hapus(){
        $id = $this->uri->segment(3);
        if (!empty($id)) {
            //proses delete data
            $this->db->where('id',$id);
            $this->db->delete('berita');
        }
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Menghapus data</p>
                </div>');  
        redirect('artikel');
    }
}
