<html>
    <head>
</head>
<body>
    <h3>DAFTAR DVD</h3>
    <form action="proses-tambah.php" method="POST">
        <fieldset>
            
        <p>
            <label for="nama_penyewa"> Nama Penyewa : </label>
            <input type="text" name="nama_penyewa"/>
</p>

<p>
    <label for="alamat"> Alamat : </label>
    <textarea name="alamat" row="5"></textarea>
</p>

<p>
    <label for="genre_film">Genre Film : </label>
    <input type="text" name="genre"/>
</p>

<p>
    <label for="judul_film"> Judul Film : </label>
    <input type="text" name="judul" />
</p>

<p>
    <label for="tahun_film"> Tahun Film : </label>
    <input type="number" name="tahun" />
</p>

<p>
  <label for="tanggal_sewa" > Tanggal Sewa : </label>
  <input type="date" name="tanggal_sewa" />
</p>

<p>
    <label for="tanggal_kembali"> Tanggal kembali : </label>
    <input type="date" name="tanggal_kembali" />
</p>

<p>
    <label for="harga" > Harga : </label>
    <input type="number" name="harga"/>
</p>

<p>
    <input type="submit" value="kirim" name="tambah"/>
</p>

</fieldset>
</form>
</body>
</html>