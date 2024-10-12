<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    <h1>Tambah Data warga</h1>
    <form action="{{ route('warga.update.page', $warga->id) }}" method="post">
        @csrf
        @method('put')

        <input type="text" name="nama" placeholder="Nama Anda" value="{{ $warga->nama }}"> <br><br>
        <input type="number" name="nik" placeholder="Nomor NIK" value="{{ $warga->nik }}"> <br><br>
        <input type="number" name="no_kk" placeholder="Nomor KK" value="{{ $warga->no_kk }}"> <br><br>
        <select name="jenis_kelamin">
            <option disabled selected>Pilih Jenis Kelamin</option>
            <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
            <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select> <br><br>
        <textarea name="alamat" cols="21" rows="10">{{ $warga->alamat }}</textarea> <br><br>
        <input type="submit" name="submit" value="Ubah Data">
    </form>
</body>
</html>
