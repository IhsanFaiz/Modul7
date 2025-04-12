<?php
$nilai = array(75, 80, 65, 90, 55);

function nilaiRataRata($nilai){
    return array_sum($nilai) / count($nilai);
}
function nilaiTertinggi($nilai){
    return max($nilai);
}
function nilaiTerrendah($nilai){
    return min($nilai);
}
function statusLulus($nilaiRataRata){
    if($nilaiRataRata >= 60 ){
        return true;
    }
    else{
        return false;
    }
}


echo("Nilai mahasiswa : ");
foreach($nilai as $x){
    echo $x, " ";
}
$nilaiRata = nilaiRataRata($nilai);
echo "<p>Nilai rata - rata: " . $nilaiRata . "</p>";
echo "<p>Nilai tertinggi: " . nilaiTertinggi($nilai) . "</p>";
echo "<p>Nilai terrendah: " . nilaiTerrendah($nilai) . "</p>";
if(statusLulus($nilaiRata)){
    echo "<p> Status Lulus: Lulus";
}
else{
    echo "<p> Status Lulus: Tidak Lulus";
}


?>