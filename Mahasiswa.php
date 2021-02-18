<?php
    class Mahasiswa {
        public $nim  ; 
        public $nama ;
        public $tanggal_lahir ;
        public $jenis_kelamin ; 
        
        public function tampilkanAngkatan() {
            echo "$this->nama adalah angkatan 2019 yang mempunyai NIM $this->nim " ;
        }
        public function tampilkanUmur() {
            echo "  dia lahir pada tanggal $this->tanggal_lahir dan berjenis kelamin $this->jenis_kelamin  <br>" ;
        }
    }

?>