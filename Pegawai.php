<?php 
    require_once("Mahasiswa.php");

    class MahasiswaBaru extends Mahasiswa
    {
        public $no_registrasi;

        function __construct($nim, $nama, $tgl, $jk, $regis){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
            $this->no_registrasi = $regis;
        }

        public function bayarGedung(){
            echo "$this->username telah membayar gedung";
        }
    }
?>