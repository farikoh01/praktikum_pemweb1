<?php
class Mahasiswa_Model extends CI_Model
{
    public $id, $nama, $nim, $jk, $tmp_lahir, $tgl_lahir, $prodi, $ipk;

    function predikat()
    {
        return ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
    }
}