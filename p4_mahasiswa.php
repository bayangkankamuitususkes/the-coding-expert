<html>
<head>
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
    <form action="p4_proses.php" method="post">
        Nama Lengkap : <input type="text" name="nama_lengkap" required></br>
        Kelas: <input type="text" name="kelas" required></br>
        NIK: <input type="text" name="nik" required></br>
        Email: <input type="email" name="email" required></br>
        Gender: 
        <input type="radio" name="gender" value="Laki-laki"> Laki-laki
        <input type="radio" name="gender" value="Perempuan"> Perempuan</br>
        Alamat: <textarea name="alamat" required></textarea></br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
