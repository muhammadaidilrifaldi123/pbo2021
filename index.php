<?php
 
include('Mahasiswa.php');

$mahasiswa_aidil = new Mahasiswa();
$mahasiswa_faul = new Mahasiswa();
$mahasiswa_niko = new Mahasiswa();
 
$mahasiswa_aidil->nim = "H1101191007" ;
$mahasiswa_aidil->nama = "Muhammad Aidil Rifaldi" ;
$mahasiswa_aidil->tanggal_lahir = "18-12-2000" ;
$mahasiswa_aidil->jenis_kelamin = "laki-Laki" ;

$mahasiswa_faul->nim = "H1101191046";
$mahasiswa_faul->nama = "Faul oliber" ;
$mahasiswa_faul->tanggal_lahir = "27-06-2001";
$mahasiswa_faul->jenis_kelamin = "Laki-laki";

$mahasiswa_niko->nim = "H1101191037";
$mahasiswa_niko->nama = "nicorallo desca ";
$mahasiswa_niko->tanggal_lahir = "10-09-2000" ;
$mahasiswa_niko->jenis_kelamin = "Laki-Laki";

$mahasiswa_aidil->tampilkanAngkatan();
$mahasiswa_aidil->tampilkanUmur()  ;
$mahasiswa_faul->tampilkanAngkatan();
$mahasiswa_faul->tampilkanUmur() ; 
$mahasiswa_niko->tampilkanAngkatan();
$mahasiswa_niko->tampilkanUmur()  ;
