<?php

namespace App\Models;
class TenagaKependidikan extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($us,$ps,$email,$nip,$nama,$alamat){
        $this->username = $un;
        $this->password = $ps;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }
    public function hitungTunjanganKinerja()
    {    
    }

    public function presensiMasuk()
    {  
    }

    public function setNip($nip)
    {    
    }

    public function getNip()
    { 
    }

    public function setNama($nama)
    {
    }

    public function getNama()
    {
    }
}