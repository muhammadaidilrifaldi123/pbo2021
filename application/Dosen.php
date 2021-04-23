<?php

namespace App;
class Dosen extends Pegawai{
    protected $nidn;
    protected $jabatan_akademis;


    function __construct($nip, $nama, $hp, $gaji, $nidn, $jabatan){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gaji;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $jabatan;
    }

public function mengajar(){
    echo $this->nama. "  mengajar<br>";
}

public function meneliti(){
    echo $this->nama. "  meneliti<br>";
}

public function setNidn($nidn){
    $this->nidn = $nidn;
}

public function setJabatanAkademis($jabatan_akademis){
    $this->jabatan_akademis = $jabatan_akademis;
}

public function setNip($nip){
     $this->nip = $nip;
}

public function setNama($nama){
    $this->nama = $nama;
}

public function setHp($hp){
    $this->no_hp = $hp;
}

public function setGaji($gaji){
    $this->gaji_pokok = $gaji;
}

public function getNidn(){
    return $this->nidn;
}

public function getJabatanAkademis(){
   return $this->jabatan_akademis;
}

public function getNip(){
    return $this->$nip ;
}

public function getNama(){
    return $this->$nama;
}

public function getHp(){
    return $this->no_hp;
}

public function getGaji(){
    return $this->gaji_pokok;
}

}
?>