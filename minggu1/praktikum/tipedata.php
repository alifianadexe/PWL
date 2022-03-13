<?php
$nim = "A11.2020.12481";
$nama = 'Muhammad Alifian Aqshol';
$umur = 22;
$nilai = 99.99;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama <br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>