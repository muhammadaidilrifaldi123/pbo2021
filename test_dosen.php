<?php

use application\Dosen;
use application\Mahasiswa;
use application\frontend\MyDate;


require_once 'initialize.php';


$dian = new Dosen('12345','Dian Prawira','08123456','Rp. 8.500.000','373732','Dosen');
$dian->mengajar();
$dian->meneliti();

$aidil = new Mahasiswa('H1101191007', 'Muhammad Aidil rifaldi', '18-12-2001', 'L');
$aidil->tampilkanAngkatan(); 
echo "<br>";
$tanggalku = new myDate();
$tanggalku->tanggal();



