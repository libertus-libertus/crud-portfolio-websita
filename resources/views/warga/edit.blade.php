@extends('layouts.master')
@section('pageTitle', 'Ubah Data')
@section('content')
<div class="container my-2">
    <h1>Ubah Data warga</h1>
    <form action="{{ route('warga.update.page', $warga->id) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group mb-2">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $warga->nama }}">
        </div>
        <div class="form-group mb-2">
            <label for="nik" class="form-label">Nomor NIK</label>
            <input type="text" class="form-control" name="nik" id="nik" value="{{ $warga->nik }}">
        </div>
        <div class="form-group mb-2">
            <label for="no_kk" class="form-label">Nomor KK</label>
            <input type="text" class="form-control" name="no_kk" id="no_kk" value="{{ $warga->no_kk }}">
        </div>
        <div class="form-group mb-2">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option disabled selected>Pilih Jenis Kelamin</option>
                <option value="L" @if($warga->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($warga->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" cols="21" rows="3">{{ $warga->alamat }}</textarea>
        </div>
        <input type="submit" name="submit" value="Ubah Data" class="btn btn-primary btn-sm">
        <a href="{{ route('warga.page') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
</div>
@endsection

