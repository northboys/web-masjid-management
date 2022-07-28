<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Kegiatan_model');
    $this->load->library('form_validation');        
    $this->load->library('datatables');
  }

  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('kegiatan/kegiatan_list');
    $this->load->view('template/footer');
  } 

  public function json() {
    header('Content-Type: application/json');
    echo $this->Kegiatan_model->json();
  }

  public function read($id) 
  {
    $row = $this->Kegiatan_model->get_by_id($id);
    if ($row) {
      $data = array(
        'id_kegiatan' => $row->id_kegiatan,
        'id_kategori' => $row->id_kategori,
        'nama_kegiatan' => $row->nama_kegiatan,
        'waktu_kegiatan' => $row->waktu_kegiatan,
        'gambar_kegiatan' => $row->gambar_kegiatan,
        'keterangan_kegiatan' => $row->keterangan_kegiatan,
      );
      $this->load->view('template/header');
      $this->load->view('kegiatan/kegiatan_read', $data);
      $this->load->view('template/footer');
    } else {
      $this->session->set_flashdata('message', 'Record Not Found');
      redirect(site_url('kegiatan'));
    }
  }

  public function create() 
  {
    $data = array(
      'button' => 'Create',
      'action' => site_url('kegiatan/create_action'),
      'id_kegiatan' => set_value('id_kegiatan'),
      'id_kategori' => set_value('id_kategori'),
      'nama_kegiatan' => set_value('nama_kegiatan'),
      'waktu_kegiatan' => set_value('waktu_kegiatan'),
      'gambar_kegiatan' => set_value('gambar_kegiatan'),
      'keterangan_kegiatan' => set_value('keterangan_kegiatan'),
    );
    $data['kategori'] = $this->db->get('kategori')->result_array();
    $this->load->view('template/header');
    $this->load->view('kegiatan/kegiatan_form', $data);
    $this->load->view('template/footer');
  }

  public function create_action() 
  {
    $this->_rules();

    // if ($this->form_validation->run() == FALSE) {
    //   $this->create();
    // } else {

      $config['upload_path'] = './assets/upload/';
      $config['allowed_types'] = 'gif|jpg|png|pdf';
      $config['max_size'] = 2000;


      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('gambar_kegiatan')) 
      {
          $error = array('error' => $this->upload->display_errors());

          // $this->load->view('imageupload_form', $error);
          echo json_encode($error);
      } 
      else 
      {
          $data = array('data' => $this->upload->data());

          // $this->load->view('imageupload_success', $data);
      }

      $konfig['upload_path'] = './assets/upload/';
      $konfig['allowed_types'] = 'gif|jpg|png|pdf';
      $konfig['max_size'] = 2000;


     


      $data = array(
        'id_kategori' => $this->input->post('id_kategori',TRUE),
        'nama_kegiatan' => $this->input->post('nama_kegiatan',TRUE),
        'waktu_kegiatan' => $this->input->post('waktu_kegiatan',TRUE),
        'gambar_kegiatan' => $data['data']['file_name'],
        'keterangan_kegiatan' => $this->input->post('keterangan_kegiatan',TRUE),
      );

      $this->Kegiatan_model->insert($data);
      $this->session->set_flashdata('message', 'Create Record Success');
      redirect(site_url('kegiatan'));
    // }
  }

  public function update($id) 
  {
    $row = $this->Kegiatan_model->get_by_id($id);

    if ($row) {
      $data = array(
        'button' => 'Update',
        'action' => site_url('kegiatan/update_action'),
        'id_kegiatan' => set_value('id_kegiatan', $row->id_kegiatan),
        'id_kategori' => set_value('id_kategori', $row->id_kategori),
        'nama_kegiatan' => set_value('nama_kegiatan', $row->nama_kegiatan),
        'waktu_kegiatan' => set_value('waktu_kegiatan', $row->waktu_kegiatan),
        'gambar_kegiatan' => set_value('gambar_kegiatan', $row->gambar_kegiatan),
        'keterangan_kegiatan' => set_value('keterangan_kegiatan', $row->keterangan_kegiatan),
      );

      $data['kategori'] = $this->db->get('kategori')->result_array();
      $this->load->view('template/header', $data);
      $this->load->view('kegiatan/kegiatan_form', $data);
      $this->load->view('template/footer');

    } else {
      $this->session->set_flashdata('message', 'Record Not Found');
      redirect(site_url('kegiatan'));
    }
  }

  public function update_action() 
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->update($this->input->post('id_kegiatan', TRUE));
    } else {
      $data = array(
        'id_kategori' => $this->input->post('id_kategori',TRUE),
        'nama_kegiatan' => $this->input->post('nama_kegiatan',TRUE),
        'waktu_kegiatan' => $this->input->post('waktu_kegiatan',TRUE),
        'gambar_kegiatan' => $this->input->post('gambar_kegiatan',TRUE),
        'keterangan_kegiatan' => $this->input->post('keterangan_kegiatan',TRUE),
      );

      $this->Kegiatan_model->update($this->input->post('id_kegiatan', TRUE), $data);
      $this->session->set_flashdata('message', 'Update Record Success');
      redirect(site_url('kegiatan'));
    }
  }

  public function delete($id) 
  {
    $row = $this->Kegiatan_model->get_by_id($id);

    if ($row) {
      $this->Kegiatan_model->delete($id);
      $this->session->set_flashdata('message', 'Delete Record Success');
      redirect(site_url('kegiatan'));
    } else {
      $this->session->set_flashdata('message', 'Record Not Found');
      redirect(site_url('kegiatan'));
    }
  }

  public function _rules() 
  {
   $this->form_validation->set_rules('id_kategori', 'id kategori', 'trim|required');
   $this->form_validation->set_rules('nama_kegiatan', 'nama kegiatan', 'trim|required');
   $this->form_validation->set_rules('waktu_kegiatan', 'waktu kegiatan', 'trim|required');
   $this->form_validation->set_rules('gambar_kegiatan', 'gambar kegiatan', 'trim|required');
   $this->form_validation->set_rules('keterangan_kegiatan', 'keterangan kegiatan', 'trim|required');

   $this->form_validation->set_rules('id_kegiatan', 'id_kegiatan', 'trim');
   $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 }

}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-24 06:16:18 */
/* http://harviacode.com */