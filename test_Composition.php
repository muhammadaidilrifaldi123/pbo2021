<?php

use App\Pengguna;
use App\Alamat;

require_once('vendor/autoload.php');

$pengguna = new Pengguna (4,"aidil", new Alamat(14, "Sambas"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota(); 