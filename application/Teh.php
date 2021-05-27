<?php

namespace App;

use App\Minuman;

class Teh implements Minuman 
{
    public function buat()
    {
        echo"panaskan air terlebih dahulu";
        echo"siapkan teh dan gula";
        echo"setelah mendidih ,masukkan air panas ke dalam tempat tersebut";
        echo"diamkan selama 5 menit";
    }
    public function minum()
    {
        echo "minum ddengan mulut di hirup sedikit sedkit di tambah dengan kue sehingga mantap";
    }
}