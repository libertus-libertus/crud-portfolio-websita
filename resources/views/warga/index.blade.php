@extends('layouts.master')

@section('pageTitle', 'Dashboard')
@section('content')
<div class="container my-2">
    <a href="{{ route('warga.create.page') }}" class="btn btn-primary btn-sm mb-2">Tambah Data Baru</a>

    <table class="table table-bordered table-striped">
        <thead>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Nomor NIK</th>
            <th>Nomor KK</th>
            <th class="text-center">Gender</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @forelse ($warga as $item)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nik }}</td>
            <td>{{ $item->no_kk }}</td>
            <td class="text-center">{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('warga.edit.page', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('warga.destroy.page', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Hapus" class="btn btn-sm btn-danger">
                    </form>
                </div>
            </td>
        </tbody>
        @empty
        <span class="text-primary">Belum Ada Data</span>
        @endforelse
    </table>
</div>
@endsection
