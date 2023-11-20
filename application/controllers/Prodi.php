<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Prodi.php
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller PRODI.PHP
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Prodi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = " Program Study Page";
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer");

  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Program Studi";
    $data['user'] = $this->db->get_where('user', [
      'email' =>
        $this->session->userdata('email')
    ])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
      'required' => 'Nama Program Studi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
      'required' => 'Ruangan Program Studi Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
      'required' => 'Jurusan Wajib di isi'
    ]);
  
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
      'required' => 'Alamat Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
      'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
      'required' => 'NO HP Mahasiswa Wajib di isi',
      'integer' => 'NO HP harus Angka'
    ]);
    $this->form_validation->set_rules('lulusan_output', 'Lulusan Output', 'required', [
      'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambah_prodi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_prodi' => $this->input->post('nama_prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'nama_kaprodi' => $this->input->post('nama_kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'lulusan_output' => $this->input->post('lulusan_output')
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/prodi/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Prodi_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
Prodi Berhasil Ditambah!</div>');
      redirect('Prodi');


    }
  }

  function upload()
  {
    $data = [
      'nama_prodi' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'nama_kaprodi' => $this->input->post('nama_kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'lulusan_output' => $this->input->post('lulusan')
    ];
    $this->Prodi_model->insert($data);
    redirect('Prodi');

  }
  public function edit($id)
  {
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
      'required' => 'Nama Program Studi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
      'required' => 'Ruangan Program Studi Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
      'required' => 'Jurusan Wajib di isi'
    ]);
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
      'required' => 'Alamat Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
      'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
      'required' => 'NO HP Mahasiswa Wajib di isi',
      'integer' => 'NO HP harus Angka'
    ]);
    $this->form_validation->set_rules('lulusan_output', 'Lulusan Output', 'required', [
      'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambah_prodi", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_prodi' => $this->input->post('nama_prodi'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'nama_kaprodi' => $this->input->post('nama_kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'lulusan_output' => $this->input->post('lulusan_output')
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '2048';
      $config['upload_path'] = './assets/img/prodi/';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar')) {
      $old_image = $data['prodi']['gambar'];
      if ($old_image != 'default.jpg') {
      unlink(FCPATH . 'assets/img/prodi/' . $old_image);
      }
      $new_image = $this->upload->data('file_name');
      $this->db->set('gambar', $new_image);
      } else {
      echo $this->upload->display_errors();
      }
      }
      $id = $this->input->post('id');
      $this->Prodi_model->update(['id' => $id], $data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil
      Diubah!</div>');
      redirect('Prodi');
    }
  }
  public function update()
  {
    $data = [
      'nama_prodi' => $this->input->post('nama'),
      'ruangan' => $this->input->post('ruangan'),
      'jurusan' => $this->input->post('jurusan'),
      'akreditasi' => $this->input->post('akreditasi'),
      'nama_kaprodi' => $this->input->post('nama_kaprodi'),
      'tahun_berdiri' => $this->input->post('tahun_berdiri'),
      'lulusan_output' => $this->input->post('lulusan')
    ];
    $id = $this->input->post('id');
    $this->Prodi_model->update(['id' => $id], $data);
    redirect('prodi');
  }

  public function hapus($id)
  {
    $this->Prodi_model->delete($id);
    $error = $this->db->error();
    if ($error['code'] != 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
      fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
      class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
    }
    redirect('Prodi');
  }

}