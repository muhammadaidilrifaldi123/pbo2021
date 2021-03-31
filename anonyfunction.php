<?php
$jml = function ($a,$b){
    $c = $a + $b;
    return $c;
};

// $y nilai default jika tanpa argumen
function perkalian($x, $y = 12){
    $z = $x * $y;
    return $z;
}

echo perkalian(4, function () {
    return 4 * 6;
});


echo $jml(5, 7);