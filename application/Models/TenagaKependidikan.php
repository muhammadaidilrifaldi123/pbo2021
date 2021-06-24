<?php

namespace App\Models;

class TenagaKependidikan extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($un,$pw,$email,$nip,$nama,$alamat){
        $this->username = $un;
        $this->password = $pw;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function hitungTunjanganKinerja()
    {
        # code...
    }

    public function presensiMasuk()
    {
        # code...
    }

    public function setNip($nip)
    {
        # code...
    }

    public function getNip()
    {
        # code...
    }

    public function setNama($nama)
    {
        # code...
    }

    public function getNama()
    {
        # code...
    }
}