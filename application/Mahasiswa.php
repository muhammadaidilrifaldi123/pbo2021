<?php

namespace App;

//jika di kasih function final dia tidak bisa menjalan kan function overrding 
class Mahasiswa extends User {

 public $nim;
 public $nama;
 public $tanggal_lahir;
 public $jenis_kelamin;
 const AKTIF = 1;
 const NONAKTIF = 0;
 public static $status = self::AKTIF;

 function __construct($nim,$nama,$tgl,$jk,$sks,$bobot){
   $this->nim = $nim;
   $this->nama = $nama;
   $this->tanggal_lahir = $tgl;
   $this->jenis_kelamin = $jk;

 }
 
 public function tampilkanAngkatan(){
  $angkatan = substr($this->nim,5,-4);
  echo $this->nama .' Angkatan 20'.$angkatan;
 }
 
 public function tampilkanUmur(){
   echo 'Umur : '. date_diff(date_create($this->tanggal_lahir), date_create('today'))->y. ' Tahun <br>';
 }
 
 public function tampilkanNama(){
     echo 'Nama : '.$this->nama. '<br>'. '<br>';
 }
 //static
 public static function bergerak(){  
   echo "agen solusi , bukan perubahan";
 }

 public static function tuntaskan()
 {
   self::bergerak();
   echo "memperbaiki menjadi lebih baik";
 }

 public static function hitungsks($sks,$bobot){
  return $sks*$bobot;

 }

}
?>

