<?php
function luasSegi3($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

function sisiMiringSegi3($alas, $tinggi){
    return sqrt(pow($alas, 2)) + sqrt(pow($tinggi, 2));
}
function kelilingSegi3($alas, $tinggi, $sisiMiring){
    return $alas + $tinggi + $sisiMiring;
}

function formatDesimal($angka){
    return number_format((float)$angka, 2, ",", ".");
}

$alas = 4.5;
$tinggi = 6.0;
$luas = luasSegi3($alas, $tinggi);
$sisiMiring = sisiMiringSegi3($alas, $tinggi);
$keliling = kelilingSegi3($alas, $tinggi, $sisiMiring);

echo '<p>Alas: ' . $alas . '</p>';
echo '<p>Tinggi: ' . $tinggi . '</p>';
echo '<p>luas: ' . formatDesimal($luas) . '</p>';
echo '<p>Sisi Miring: ' . sisiMiringSegi3($alas, $tinggi) . '</p>';
echo '<p>Keliling: ' . formatDesimal($keliling) . '</p>';

?>