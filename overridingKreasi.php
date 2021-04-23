<?php 

class Mahasiswa 
{
    public $nama;  

    public function Belajar()
    {
        echo 'perkenalkan saya bernama'." ". $this->nama ." ".  "adalah mahasiswa untan\n";
    }
    
    public function kuliah()
    {
        echo 'masuk untan pada tahun 2019';
    
    }
}
class MahasiswaBaru extends Mahasiswa 
{
    public function Belajar()
    {
        echo 'dia '. " "  .$this->nama . " "  . 'adalah seorang programmer';
    }
    public function parent_Belajar() 
    {
        return parent::Belajar();
    }
}
    

$aidil = new MahasiswaBaru();
$aidil->nama = "muhammad aidil rifaldi";
$aidil->parent_Belajar();
