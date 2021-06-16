@extends('template/layout')
@section('title', 'Tampil Data')
@section('judul', 'Tampil Data')
@section('konten')
<a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah</a>
<br />
<br />
<table class="table table-bordered table-striped">
    <thead>
        <th>No</th>
        <th>Nama</th>
            <th>Jenis</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        @foreach($data as $no => $b)
        <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->jenis }}</td>
            <td>{{ $b->deskripsi }}</td>
            <td>
                <form method="post" action="{{route('barang.destroy', $b->id_barang) }}">
                    <a href="{{ route('barang.edit', $b->id_barang) }}" class="btn btn-warning btn-sm">Edit</a>
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Yakin Anda ingin hapus ?')"
                        class="btn btn-danger btn-sm"> Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
