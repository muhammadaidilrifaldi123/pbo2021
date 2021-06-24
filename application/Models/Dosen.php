<?php

namespace App\Models;

class Dosen extends Pengguna implements Pegawai
{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($us,$ps,$email,$nip,$nma,$no_telp){
        $this->username = $us;
        $this->password = $ps;
        $this->email = $email;
        $this->nip = $nip;
        $this->nama = $nma;
        $this->no_telp = $no_telp;
    }

    public function validasiMahasiswa()
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