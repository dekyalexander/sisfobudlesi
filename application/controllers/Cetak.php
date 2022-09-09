<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('m_list','',TRUE);
	}
	public function kartu($id){
	// ambil data anggota
		$peserta=$this->m_list->detail($this->uri->segment(3));
	// buat file pdf
		$pdf = new FPDF();
	//buka file
		
	// disable oto page break
		$pdf->SetAutoPageBreak(false);
		$pdf->AddPage();


		$i=0;

		$max=25;

		$row_height=5;

		$pdf->Image('./assets/img/report background.jpg',9.75,4.0,90,75);
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','',10);
		$pdf->Rect(9.75, 4.0, 90, 75 , 'D') ;
		$pdf->Rect(105, 4.0, 90, 75 , 'D') ;


		$pdf->Cell(95);$pdf->Cell(89,6,'PERHATIAN',0,0,'C',0);		
		$pdf->Ln();
		$pdf->Cell(95);$pdf->Cell(5,5,'1. Kartu ini berlaku selama menjadi anggota.',0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(95);$pdf->Cell(5,5,'2. Apabila hilang harap segera lapor ke ADMIN.',0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(95);$pdf->Cell(5,5,'3. Bagi yang menemukan Kartu ini, harap melaporkan. ',0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(100);$pdf->Cell(5,5,'Ke Balai Budidaya Lele Sangkuriang Sindang Sari. ',0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(95);$pdf->Cell(5,5,'4. Penggantian Kartu tidak dikenakan biaya.',0,0,'l',0);
		$pdf->SetFont('Arial','',11);
		$pdf->Ln();

		$pdf->Image('./uploads/'.$peserta['photo'],9.75,4.0,90,75);
		
		$pdf->Cell(35,5,'Nama',0,0,'l',0);$pdf->Cell(65,5,': '.$peserta['nama'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Alamat',0,0,'l',0);$pdf->Cell(65,5,': '.$peserta['alamat'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Nomor Handphone',0,0,'l',0);$pdf->Cell(65,5,': '.$peserta['nohp'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Pendidikan',0,0,'l',0);$pdf->Cell(65,5,': '.$peserta['pendidikan'],0,0,'l',0);
		$pdf->Ln();
		$pdf->Cell(35,5,'Pekerjaan',0,0,'l',0);$pdf->Cell(65,5,': '.$peserta['pekerjaan'],0,0,'l',0);
		$pdf->Ln();

		$pdf->SetFont('Arial','',10);


		$pdf->Output();	


	}
}
