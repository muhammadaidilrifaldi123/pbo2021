<?php
require_once ("Mahasiswa.php");

class MahasiswaBaru extends Mahasiswa{
    protected $no_regristrasi;

    function __construct($nim, $nama, $tgl, $jk,$no_regristrasi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
        $this->no_registrasi = $no_regristrasi;
    }
    public function bayarGedung(){
        
    }
    // setter
    public function setNoRegristrasi($no_regristrasi){
        $this->no_registrasi=$no_regristrasi;
    }
    // getter
    public function getNoRegristrasi(){
        return $this->no_registrasi;
    }
}
?>