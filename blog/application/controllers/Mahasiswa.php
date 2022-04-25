<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// Fungsi : menampilkan seluruh data
	public function index()
	{
		// load model 
        $this->load->model('mahasiswa_model', 'mhs1');

        // Pake class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = "010001";
        $this->mhs1->nama = "Faiz Fikri";
        $this->mhs1->gender = "L";
        $this->mhs1->ipk = 3.85;

        // Buat Objek 2
        // load model 
        $this->load->model('mahasiswa_model', 'mhs2');

        //Pake class model + Isi data
        $this->mhs2->id = 2;
        $this->mhs2->nim = "020001";
        $this->mhs2->nama = "Pandan Wangi";
        $this->mhs2->gender = "P";
        $this->mhs2->ipk = 3.35;

        $list_mhs = [$this->mhs1, $this->mhs2];

        // Siapain data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');
    }

}
