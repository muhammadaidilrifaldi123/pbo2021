<?php

namespace App;

use App\Minuman;

class EsJeruk implements Minuman
{
    public function buat() 
    {
        echo "Masukkan di blender";
    }
    public function minum() 
    {
        echo "minumlah";
    }
    public static function dilihat()
    {
        echo "cuman boleh dilihat saja,tidak di minum";
    }
}