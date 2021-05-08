<?php

namespace App;

use App\Minuman;

class Cendol implements Minuman
{
    public function buat()
    {
        echo "tambahkan cendol, masukkan santan
        dan air, gula cair";
        echo "tambahkan es batu";

    }
    public function minum()
    {
        echo "disedot dengan pipet/sedotan";
    }   

}