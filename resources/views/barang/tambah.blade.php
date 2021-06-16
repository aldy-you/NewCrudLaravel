@extends('template/layout')
@section('title', 'Tambah Data')
@section('judul', 'Tambah Data')
@section('konten')
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <a href="{{route('barang.index')}}" class="btn btn-secondary">Balik</a>
        <br />
        <br />
        <form method="post" action="{{ route('barang.store')}}">

            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama" autofocus
                    value="{{old('nama')}}">

                @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
                @endif

            </div>
            <br>
             <div class="form-group">
                <input type="text" name="jenis" class="form-control" placeholder="Jenis">

                @if($errors->has('jenis'))
                <div class="text-danger">
                    {{ $errors->first('jenis')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" cols="30"
                    rows="10">{{old('deskripsi')}}</textarea>

                @if($errors->has('deskripsi'))
                <div class="text-danger">
                    {{ $errors->first('deskripsi')}}
                </div>
                @endif

            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary text-center">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
