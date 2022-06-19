<?php

class Mahasiswa_model extends CI_Model
{
  public $id;
  public $nama;
  public $nim;
  public $jk;


  public function predikat()
  {
    $predikat = ($this->ipk >= 3.85) ? "Cumlaude" : "Baik";
    return $predikat;
  }
}
