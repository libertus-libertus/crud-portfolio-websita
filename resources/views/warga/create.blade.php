<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <h1>Tambah Data warga</h1>
    <form action="{{ route('warga.store.page') }}" method="post">
        @csrf

        <input type="text" name="nama" placeholder="Nama Anda"> <br><br>
        <input type="number" name="nik" placeholder="Nomor NIK"> <br><br>
        <input type="number" name="no_kk" placeholder="Nomor KK"> <br><br>
        <select name="jenis_kelamin">
            <option disabled selected>Pilih Jenis Kelamin</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select> <br><br>
        <textarea name="alamat" cols="21" rows="10"></textarea> <br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
