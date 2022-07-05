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

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/create');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $this->load->model('Mahasiswa_Model', 'mhs_input');
        // $request = $this->input->post([
        //     'nama','nim','gender','tmp_lahir','tgl_lahir','prodi','ipk'
        // ]);
        $this->mhs_input->nama = $this->input->post('nama');
        $this->mhs_input->nim = $this->input->post('nim');
        $this->mhs_input->gender = $this->input->post('gender');
        $this->mhs_input->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs_input->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs_input->prodi = $this->input->post('prodi');
        $this->mhs_input->ipk = $this->input->post('ipk');

        $mhs = [$this->mhs_input];
        $data['mhs'] = $mhs;

        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/view', $data);
        $this->load->view('layouts/footer');

        // redirect(base_url('mahasiswa'));
    }
}
