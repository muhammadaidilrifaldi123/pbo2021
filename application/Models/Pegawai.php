<?php

namespace App\Models;

interface Pegawai  
{
    //method pada interface tidak bisa private

    public function setNip($nip);
    public function presensiMasuk();
    public function getNip();
    public function setNama($nama);
    public function getNama();
}