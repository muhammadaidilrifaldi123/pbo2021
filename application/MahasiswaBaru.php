<?php
namespace application;
class MahasiswaBaru extends Mahasiswa
{
    protected $no_registrasi;


    function __construct($nim, $nama, $tgl, $jk, $regis){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
        $this->no_registrasi = $regis;
    }

    public function bayarGedung(){

    }

     public function setNoRegistrasi($no_registrasi){
    $this->no_registrasi = $no_registrasi;
    }

    public function getNoRegistrasi(){
    $this->no_registrasi = $no_registrasi;
    }
}
?>