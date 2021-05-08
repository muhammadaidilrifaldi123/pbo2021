<?php 

namespace App;

use App\Minuman;

class Kopi implements Minuman 
{
    public function buat()
    {
        echo "masukkan air panas hingga 100  derajat";
        echo "masukkkan kopi ke dalam gelas air panas";
        echo "aduk sebanyak 60 kali putar";
        echo "diamkan selama 15 menit";
        echo "tambahkan gula aren";

    }
    public function minum()
    {
        echo "diseruput sedikit demi sedikit";
    }
    public function tambahSusu()
    {
        echo "tambahkan susu ke dalam kopi";
    }

}

