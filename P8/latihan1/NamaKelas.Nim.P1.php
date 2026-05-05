<?php
$nama = "Arif yang ganteng dan santun";
$nim = 2555301025;
$kelas = "1TIA";
$umur = 17;
$kalimat = "saya sangat lapar";

echo "Nama : ".$nama."<br>";
echo "NIM : ".$nim."<br>";
echo "Kelas : ".$kelas."<br>";
echo "Umur : ".$umur." Tahun"."<br>";
echo $kalimat."<br>";
echo "- Manipulasi String"."<br>";
print strtoupper($kalimat)."<br>";
print ucfirst($kalimat)."<br>";
print ucwords($kalimat)."<br>";
print strtolower($kalimat)."<br>";
$umur+=5;
echo "5 tahun lagi umur saya ".$umur;
?>