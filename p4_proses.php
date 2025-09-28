<?php
$nama = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
?>

<h2>Data Inputan Mahasiswa</h2>
<h4>Detail</h4>
Nama Mahasiswa : <?php echo $nama; ?></br>
Kelas : <?= $kelas ?></br>
NIK : <?= $nik ?></br>
Email : <?= $email ?></br>
Gender : <?= $gender ?></br>
Alamat : <?= $alamat ?></br>
