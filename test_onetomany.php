<?php

require_once('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$aidil = new Pengguna(4,"aidil", new Alamat(14, "Sambas"));

$lapak_budi = new Penjual();
$lapak_budi->setName('Budi saja');
$lapak_budi->setId(1);

$lapak_ani = new Penjual();
$lapak_ani->setName('Ani jak');
$lapak_ani->setId(2);

$lapak_wati = new Penjual();
$lapak_wati->setName('wati juga');
$lapak_wati->setId(3);

$aidil->setPenjual($lapak_budi);
$aidil->setPenjual($lapak_ani);
$aidil->setPenjual($lapak_wati);

$penjual_aidil = $aidil->getPenjual();
echo $penjual_aidil[0]->getName();// Ada 3 Index (0,1,2) 