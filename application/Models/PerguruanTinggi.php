<?php

namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\Dosen;

class PerguruanTinggi  
{
    public $id;
    public $namaPT;
    protected $akreditasi;
    public $mahasiswas = array();
    public $dosens;

    function __construct($id,$namaPT,$akreditasi,$dosen)
    {
        $this->id = $id;
        $this->namaPT = $namaPT;
        $this->akreditasi = $akreditasi;
        $this->dosens - $dosen;
    }

    public function registerMaba($nim,$nama)
    {
    }

    public function getDosen()
    {
    }
}