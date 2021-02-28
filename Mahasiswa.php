<?php
    require_once("User.php");

    class Mahasiswa extends User{
        public $nim;
        public $nama;
        public $tanggal_lahir;
        public $jenis_kelamin;

        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function tampilkanAngkatan(){ 
            $akt = substr($this->nim, 5, 2);
            echo "adalah angkatan tahun 20" . $akt;
        }

        public function tampilkanUmur(){
            $tgl_lahir = date_create($this->tanggal_lahir);
            $umur = date_diff($tgl_lahir, date_create("today"))->y;
            echo "dia berumur" . $umur ;
        }

        public function tampilkanNama(){
            echo $this->nama;
        }
    }
?>