<?php
require_once ("User.php");

class Mahasiswa extends User{
//atribut
    protected $nama;
    protected $nim;
    protected $tanggal_lahir;
    protected $jenis_kelamin;

    function __construct($nama,$nim,$tl,$jk){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->tanggal_lahir = $tl;
        $this->jenis_kelamin = $jk;
}
    public function tampilkanAngkatan(){
        echo "Merupakan angkatan tahun 20";
    }
    public function tampilkanNim(){
        echo $this->nim;
    }

    public function tampilkanUmur(){
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    }
    public function tampilkanNama($nama){
        echo $this->nama;   
    }
    // setter
    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setNim($nim){
        $this->nim=$nim;
    }
    public function setTanggalLahir($tanggal_lahir){
        $this->tanggal_lahir=$tanggal_lahir;
    }
    public function setJanisKelamin($jenis_kelamin){
       echo $this->jenis_kelamin=$jenis_kelamin;
    }
    // getter
    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getTanggalLahir(){
        return $this->tanggal_lahir;
    }
    public function getJenisKelamin(){
        return $this->jenis_kelamin;
    }
}