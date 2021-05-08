<?php
require_once('vendor/autoload.php');

use App\Cendol;
use App\Kopi;
use App\Teh;
use App\EsJeruk;

$cendol_aidil = new Cendol();
$cendol_aidil->buat();
$cendol_aidil->minum();

$Kopi_aming = new Kopi();
$Kopi_aming->buat();
$Kopi_aming->minum();

EsJeruk::dilihat();

$Teh_pucuk = new Teh();
$Teh_pucuk->buat();
$Teh_pucuk->minum();
