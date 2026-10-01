<?php
$nama = 'Budi Santoso';
$kelas = 'XII PPLG 3';
$nilaiTugas = 85;
$nilaiUTS = 80;
$nilaiUAS = 90;

$nilaiAkhir = ($nilaiTugas * 30/100) + ($nilaiUTS * 30/100) + ($nilaiUAS * 40/100);

if($nilaiAkhir >= 90){
    $predikat = "A";
} elseif ($nilaiAkhir >= 80) {
    $predikat = "B";
}elseif ($nilaiAkhir >= 75) {
    $predikat = "C";
}elseif ($nilaiAkhir >= 60){
    $predikat = "D";
}else {
    $predikat = "E";
}

if ($nilaiAkhir >= 75){
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Nama: <?=  $nama ?> </p>
    <p> Kelas: <?=  $kelas ?> </p>
    <hr>
    <p> Nilai Tugas: <?=  $nilaiTugas ?> </p>
    <p> Nilai UTS: <?=  $nilaiUTS ?> </p>
    <p> Nilai UAS: <?=  $nilaiUAS ?> </p>
    <hr>
    <p> Nilai Akhir: <?=  $nilaiAkhir ?> </p>
    <p> Predikat: <?=  $predikat ?> </p>
    <p> Status: <?=  $status ?> </p>

</body>
</html>
 