<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
  public function index()
  {

    $this->load->model('dosen_model', 'dsn1');

    $this->dsn1->id = 1;
    $this->dsn1->nama = 'Sirojul Munir, S.Si., M.Kom.';
    $this->dsn1->nidn = '123456';
    $this->dsn1->matakuliah = 'Pemrograman Web 2';
    $this->dsn1->link = 'https://elena.nurulfikri.ac.id/course/view.php?id=1309';

    $this->load->model('dosen_model', 'dsn2');

    $this->dsn2->id = 1;
    $this->dsn2->nama = 'Pudy Prima, S.T., M.Kom.';
    $this->dsn2->nidn = '010101';
    $this->dsn2->matakuliah = 'Basis Data';
    $this->dsn2->link = 'https://elena.nurulfikri.ac.id/course/view.php?id=1265';

    $this->load->model('dosen_model', 'dsn3');

    $this->dsn3->id = 1;
    $this->dsn3->nama = 'Yahya Zulkarnain, S.T.';
    $this->dsn3->nidn = '31230111';
    $this->dsn3->matakuliah = 'Statistik dan Probabilitas';
    $this->dsn3->link = 'https://elena.nurulfikri.ac.id/course/view.php?id=1263';

    $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

    $data["list_dsn"] = $list_dsn;


    $this->load->view("template/header.php");
    $this->load->view("dosen/index.php", $data);
  }
}
