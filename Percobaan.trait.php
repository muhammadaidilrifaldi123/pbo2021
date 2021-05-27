<?php

namespace App;

trait Televisi
{
    public $merek;
    public function Televisi()
    {
        echo " Televis ini merek ". $this->merek."<br>";
        echo "Konsumsi daya 1,2";
        echo "<br/>";
    }


}
trait Kipas_Angin
{
    public $Warna;
    public function Kipas_Angin()
    {
        echo "Kipas angin warna ". $this->Warna."<br>";
        echo "konsumsi daya 0,7";
        echo "<br/>";

    }

}

/**
 * trait in trait
 */
trait Smartphone
{
    public function CekOS()
    {
        return "Android versi terbaru";
    }
    
}
trait LowWatt
{
    use Smartphone;
    public function efesiensi()
    {
        return $this->CekOS(). "Konsumsi daya 0,7";

    }
}
class aidil
{
    use Televisi,Kipas_Angin,LowWatt;
}

$aidil = new aidil();
$aidil->merek = 'sharp';
$aidil->Warna = ' hijau';

$aidil->Televisi();
$aidil->Kipas_Angin();
echo $aidil->efesiensi();