<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

  public function index()
  {

    $this->load->model('mahasiswa_model', 'mhs1');
    $this->mhs1->id = 1;
    $this->mhs1->nim = '001031';
    $this->mhs1->nama = 'Gisella Anastasya';
    $this->mhs1->jk = 'P';
    $this->mhs1->ipk = 3.75;

    $this->load->model('mahasiswa_model', 'mhs2');
    $this->mhs2->id = 2;
    $this->mhs2->nim = '021023';
    $this->mhs2->nama = 'Ningsih';
    $this->mhs2->jk = 'P';
    $this->mhs2->ipk = 3.45;

    $this->load->model('mahasiswa_model', 'mhs3');
    $this->mhs3->id = 3;
    $this->mhs3->nim = '010101';
    $this->mhs3->nama = 'Wintea Hermawan';
    $this->mhs3->jk = 'P';
    $this->mhs3->ipk = 3.95;


    $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
    $data["list_mhs"] = $list_mhs;


    $this->load->view('template/header.php');
    $this->load->view('mahasiswa/index.php', $data);
  }
}
