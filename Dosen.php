<?php
require_once ("Pegawai.php")    ;

class Dosen extends Pegawai{
    protected $nidn;
    protected $jabatan_akademis;

    function __construct($nip, $nama, $hp, $gaji,$nidn,$jabatan_akademis){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gaji;
        $this->nidn = $nidn;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $jabatan_akademis;
    }
    public function mengajar(){

    }
    public function meneliti(){

    }
    public function setNidn($nidn){
        $this->nidn=$nidn;
    }
    public function setJabatanAkademis($jabatan_akademis){
        $this->jabatan_akademis=$jabatan_akademis;
    }
    public function getNidn(){
        return $this->nidn;
    }
    public function getJabatanAkademis(){
        return $this->jabatan_akademis;
    }
}
?>