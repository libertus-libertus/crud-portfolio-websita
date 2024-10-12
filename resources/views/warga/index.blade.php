<a href="{{ route('warga.create.page') }}">Tambah Data Baru</a>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Nomor NIK</th>
        <th>Nomor KK</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @forelse ($warga as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->nik }}</td>
        <td>{{ $item->no_kk }}</td>
        <td>{{ $item->jenis_kelamin }}</td>
        <td>{{ $item->alamat }}</td>
        <td>
            <a href="{{ route('warga.edit.page', $item->id) }}">Edit</a>
            <form action="{{ route('warga.destroy.page', $item->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Hapus">
            </form>
        </td>
    </tr>
    @empty
    <span>Belum Ada Data</span>
    @endforelse
</table>
