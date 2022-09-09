<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
    $this->load->model('m_list','peserta');
  }

  public function index()
  {
    $this->load->view('data_peserta');
  }
  /*
  function json(){
    $this->load->library('datatables');
    $this->datatables->select('id,nama,alamat,nohp,pendidikan,pekerjaan');
    $this->datatables->add_column('action', anchor('pendaftaran/edit/$id','<button class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i> Edit</button> ','data-toggle="modal" data-target="#ModalEditdata"').''.anchor('pendaftaran/hapus/$id','<button class="btn btn-danger btn-sm"><i class="fas fa-user-times"></i> Hapus</button> ','data-toggle="modal" data-target="#myModalHapus"').''.anchor('pendaftaran/cetak/$id','<button class="btn btn-info btn-sm"><i class="fas fa-print"></i> Cetak</button> '));
    $this->datatables->from('peserta');
    return print_r($this->datatables->generate());
  }
  function tambahdata(){
   $nama = $this->input->post('nama');
   $alamat = $this->input->post('alamat');
   $nohp = $this->input->post('nohp');
   $pendidikan = $this->input->post('pendidikan');
   $pekerjaan = $this->input->post('pekerjaan');

   $data = array(
    'nama' => $nama,
    'alamat' => $alamat,
    'nohp' => $nohp,
    'pendidikan' => $pendidikan,
    'pekerjaan' => $pekerjaan,
    );
   $this->m_tambahdata->daftar_baru($data,'peserta');
   $this->session->set_flashdata('msg', 
    '<div class="alert alert-success">
    <h4>Berhasil </h4>
    <p>Anda berhasil daftar</p>
  </div>'); 
   redirect('pendaftaran');

 }
 */
 public function ajax_list()
 {
  $list = $this->peserta->get_datatables();
  $data = array();
  $no = $_POST['start'];
  foreach ($list as $peserta) {
    $no++;
    $row = array();
    if($peserta->photo)
      $row[] = '<a href="'.base_url('./uploads/'.$peserta->photo).'" target="_blank"><img src="'.base_url('./uploads/'.$peserta->photo).'" class="img-responsive" width="50px" /></a>';
    else
      $row[] = '(No photo)';
    $row[] = $peserta->nama;
    $row[] = $peserta->alamat;
    $row[] = $peserta->nohp;
    $row[] = $peserta->pendidikan;
    $row[] = $peserta->pekerjaan;
            //add html for action
    $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0);" title="Edit" onclick="edit_peserta('."'".$peserta->id."'".')"><i class="fas fa-user-edit"></i> Edit</a>
    <a class="btn btn-sm btn-danger" href="javascript:void(0);" title="Hapus" onclick="delete_peserta('."'".$peserta->id."'".')"><i class="fas fa-user-times"></i> Hapus</a>
    <a class="btn btn-sm btn-info" href="javascript:void(0);" title="Print" onclick="print('.$peserta->id.')" ><i class="fas fa-print"></i> Print</a>';

    $data[] = $row;
  }
  $output = array(
    "draw" => $_POST['draw'],
    "recordsTotal" => $this->peserta->count_all(),
    "recordsFiltered" => $this->peserta->count_filtered(),
    "data" => $data,
    );
        //output to json format
  echo json_encode($output);
}
public function ajax_edit($id)
{
  $data = $this->peserta->get_by_id($id);
  echo json_encode($data);
}
public function ajax_add()
{
  $this->_validate();
  $data = array(
    'nama' => $this->input->post('nama'),
    'alamat' => $this->input->post('alamat'),
    'nohp' => $this->input->post('nohp'),
    'pendidikan' => $this->input->post('pendidikan'),
    'pekerjaan' => $this->input->post('pekerjaan'),
    );
  if(!empty($_FILES['photo']['name']))
  {
    $upload = $this->_do_upload();
    $data['photo'] = $upload;
  }
  $insert = $this->peserta->save($data);
  echo json_encode(array("status" => TRUE));
}
public function ajax_update()
{
  $this->_validate();
  $data = array(
    'nama' => $this->input->post('nama'),
    'alamat' => $this->input->post('alamat'),
    'nohp' => $this->input->post('nohp'),
    'pendidikan' => $this->input->post('pendidikan'),
    'pekerjaan' => $this->input->post('pekerjaan'),
    );
  if($this->input->post('remove_photo')) // if remove photo checked
  {
    if(file_exists('./uploads/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
      unlink('./uploads/'.$this->input->post('remove_photo'));
    $data['photo'] = '';
  }

  if(!empty($_FILES['photo']['name']))
  {
    $upload = $this->_do_upload();

            //delete file
    $peserta = $this->peserta->get_by_id($this->input->post('id'));
    if(file_exists('./uploads/'.$peserta->photo) && $peserta->photo)
      unlink('./uploads/'.$peserta->photo);

    $data['photo'] = $upload;
  }
  $this->peserta->update(array('id' => $this->input->post('id')), $data);
  echo json_encode(array("status" => TRUE));
}
public function ajax_delete($id)
{
  $peserta = $this->peserta->get_by_id($id);
  if(file_exists('./uploads/'.$peserta->photo) && $peserta->photo)
    unlink('./uploads/'.$peserta->photo);
  $this->peserta->delete_by_id($id);
  echo json_encode(array("status" => TRUE));
}
private function _do_upload()
{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; //set max size allowed in Kilobyte
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo')) //upload and validate
        {
          $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
          }
          return $this->upload->data('file_name');
        }
        private function _validate()
        {
          $data = array();
          $data['error_string'] = array();
          $data['inputerror'] = array();
          $data['status'] = TRUE;

          if($this->input->post('nama') == '')
          {
            $data['inputerror'][] = 'nama';
            $data['error_string'][] = 'Nama harus diisi';
            $data['status'] = FALSE;
          }

          if($this->input->post('alamat') == '')
          {
            $data['inputerror'][] = 'alamat';
            $data['error_string'][] = 'Alamat harus diisi';
            $data['status'] = FALSE;
          }

          if($this->input->post('nohp') == '')
          {
            $data['inputerror'][] = 'nohp';
            $data['error_string'][] = 'Nomor handphone harus diisi';
            $data['status'] = FALSE;
          }

          if($this->input->post('pendidikan') == '')
          {
            $data['inputerror'][] = 'pendidikan';
            $data['error_string'][] = 'Mohon pilih pendidikan anda';
            $data['status'] = FALSE;
          }

          if($this->input->post('pekerjaan') == '')
          {
            $data['inputerror'][] = 'pekerjaan';
            $data['error_string'][] = 'Mohon pilih pekerjaan anda';
            $data['status'] = FALSE;
          }

          if($data['status'] === FALSE)
          {
            echo json_encode($data);
            exit();
          }
        }
      }
