<?php
namespace application;
class Pegawai extends User{
    protected $nip;
    protected $nama;
    protected $no_hp;
    protected $gaji_pokok;


function __construct($nip, $nama, $hp, $gaji){
    $this->nip = $nip;
    $this->nama = $nama;
    $this->no_hp = $hp;
    $this->gaji_pokok = $gaji;
}

public function tampilkanGaji(){
    
}

public function setNip($nip){
    $this->nip = $nip;
}

public function setNama($nama){
    $this->nama = $nama;
}

public function setNoHp($no_hp){
    $this->no_hp = $no_hp;
}

public function setGajiPokok($gaji_pokok){
    $this->gaji_pokok = $gaji_pokok;
}

public function getNip(){
    $this->nip = $nip;
}

public function getNama(){
    $this->nama = $nama;
}

public function getNoHp(){
    $this->no_hp = $no_hp;
}

public function getGajiPokok(){
    $this->gaji_pokok = $gaji_pokok;
}

}
?>