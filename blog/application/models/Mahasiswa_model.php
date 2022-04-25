<?php

// Buat class
class Mahasiswa_model extends CI_Model{
    //Buat Strutur Data
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    //Buat method
    public function predikat(){
        // (kondisi) ? True : false
    $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
    return $predikat;
    }
}

?>