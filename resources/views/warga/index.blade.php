@extends('layouts.app')

@section('pageTitle', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Penduduk') }}</div>

                <div class="card-body">
                    <a href="{{ route('warga.create.page') }}" class="btn btn-primary btn-sm mb-2">Tambah Data Baru</a>

                    <table class="table table-striped">
                        <thead>
                            <th>NO.</th>
                            <th>NAMA</th>
                            <th>NOMOR NIK</th>
                            <th>NOMOR KK</th>
                            <th class="text-center">JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>AKSI</th>
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
                                    <a href="{{ route('warga.edit.page', $item->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
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
            </div>
        </div>
    </div>
</div>
@endsection
