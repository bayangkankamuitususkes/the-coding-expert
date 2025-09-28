<?php
  echo "hello, world! </br>";
// variabel
  $nama = "muhamad entis sutisna";
  $kelas = "07tplp015";

  echo "nama saya : $nama </br>";
  echo "kelas saya : $kelas";
// oprator
echo "<hr>";

$n_uts = 90;
$n_uas = 80;
$n_akhir = ($n_uts + $n_uas) / 2;
$grade = "C";
echo "nilai akhir saya adalah : $n_akhir </br>";
// menentukan nilai grade jika nilai > 80 = A jika nilai akhir > 70 dan < 80 = B 
// jika tidak keduanya = C 
// nilai   grade akhir adalah
if($n_akhir > 80) {
  $grade = "A";
} else if ($n_akhir > 70 && $n_akhir < 80) {
  $grade = "B";
} else {
  $grade = "C";
}
echo "selamat kamu mendapatkan nilai : $grade <hr>";
// contoh
$kendaraan = "mobil";
if($kendaraan == "motor" || $kendaraan == "spedda") {
  echo "silahkan masuk ke gang ini";
} else {
  echo "cari jalan lain";
}
echo "<hr>";

for ($i = 0; $i <10; $i++) {
  echo "nilai i $i <br>";
}
echo "<br>";

$listmahasiswa = array(
  "agus",
  "ari",
  "ayu",
  "bima",
  "lisda",
  "niko"
);
echo $listmahasiswa[2];
echo "<hr>";
foreach ($listmahasiswa as $v) {
    echo "nama nahasiswa : $v </br>";
}
echo count($listmahasiswa);
for ($i = 0; $i < 5; $i++) {
  echo "nama" . $listmahasiswa[$i] . "</br>";
}