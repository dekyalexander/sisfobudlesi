<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('m_keranjang');
	}


	public function index()
	{
		$kategori=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['produk'] = $this->m_keranjang->get_produk_kategori($kategori);
		$data['kategori'] = $this->m_keranjang->get_kategori_all();
		$this->load->view('pemesanan',$data);
	}
	public function tampil_cart()
	{
		$data['kategori'] = $this->m_keranjang->get_kategori_all();
		$this->load->view('tampil_cart',$data);
	}

	public function check_out()
	{
		$data['kategori'] = $this->m_keranjang->get_kategori_all();
		$this->load->view('check_out',$data);
	}

	public function detail_produk()
	{
		$id=($this->uri->segment(3))?$this->uri->segment(3):0;
		$data['kategori'] = $this->m_keranjang->get_kategori_all();
		$data['detail'] = $this->m_keranjang->get_produk_id($id)->row_array();
		$this->load->view('detail_produk',$data);
	}

	function tambah()
	{
		$data_produk= array('id' => $this->input->post('id'),
			'name' => $this->input->post('nama'),
			'price' => $this->input->post('harga'),
			'gambar' => $this->input->post('gambar'),
			'qty' =>$this->input->post('qty')
			);
		$this->cart->insert($data_produk);
		redirect('pemesanan');
	}

	function hapus($rowid)
	{
		if ($rowid=="all")
		{
			$this->cart->destroy();
		}
		else
		{
			$data = array('rowid' => $rowid,
				'qty' =>0);
			$this->cart->update($data);
		}
		redirect('pemesanan/tampil_cart');
	}

	function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
				'price' => $price,
				'gambar' => $gambar,
				'amount' => $amount,
				'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('pemesanan/tampil_cart');
	}

	public function proses_order()
	{
        //-------------------------Input data pelanggan--------------------------
		$data_pelanggan = array('nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'nohp' => $this->input->post('nohp'));
		$id_pelanggan = $this->m_keranjang->tambah_pelanggan($data_pelanggan);
        //-------------------------Input data order------------------------------
		$data_order = array('tanggal' => date('Y-m-d'),
			'pelanggan' => $id_pelanggan);
		$id_order = $this->m_keranjang->tambah_order($data_order);
        //-------------------------Input data detail order-----------------------
		if ($cart = $this->cart->contents())
		{
			foreach ($cart as $item)
			{
				$data_detail = array('order_id' =>$id_order,
					'produk' => $item['id'],
					'qty' => $item['qty'],
					'harga' => $item['price']);
				$proses = $this->m_keranjang->tambah_detail_order($data_detail);
			}
		}
        //-------------------------Hapus shopping cart--------------------------
		$this->cart->destroy();
		$data['kategori'] = $this->m_keranjang->get_kategori_all();
		$this->session->set_flashdata('msg', 
			'<div class="alert alert-success">
			<h4>Berhasil</h4>
			<p>Terima kasih sudah berbelanja di toko Sindang Sari Shop. Order anda sudah masuk ke database kami, dan dalam 1 x 24 Jam barang akan sampai di tempat anda.<br>
				Jangan segan mengontak kami jika ada permasalahan!</p>
			</div>');
		redirect('pemesanan/tampil_cart',$data);
		
	}
}
