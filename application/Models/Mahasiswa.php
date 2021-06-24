<?php

namespace App\Models;

require_once('Pengguna.php');

class Mahasiswa extends Pengguna
{
    private $nim;
    private $nama;
    private $IPK;
    private $alamat;

    function __construct($us,$ps,$email,$nim,$nama,$ipk,$alamat){
        $this->username = $us;
        $this->password = $ps;
        $this->email = $email;
        $this->nim = $nim;
        $this->nama = $nama;
        $this->IPK = $ipk;
        $this->alamat = $alamat;
    }

    public function inputMatkul()
    {
    }

    public function updateProfil()
    { 
    }
}