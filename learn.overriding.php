<?php 

class Pegawai
 {
    public $nama;

    public function sapa(){
        echo 'Halo'." ". $this->nama ." ". "posisi anda saat ini adalah pegawai\n";
    }
    
    public function masuk(){
        echo 'Anda masuk kerja pada tanggal ' . date ('Y-m-d') . "\n"; 
    }

}
class ketuaJurusan extends Pegawai {
    public function sapa(){
        echo 'Hei'. " "  .$this->nama . " "  . 'anda itu adalah ketua jurusan ya';
    }
    public function parent_sapa() {
        return parent::sapa();
    }
    
}

$budi = new ketuaJurusan();
$budi->nama = 'budi saja'; 
$budi->parent_sapa();
