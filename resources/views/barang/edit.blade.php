@extends('template/layout')
@section('title', 'Edit Data')
@section('judul', 'Edit Data')
@section('konten')
<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <a href="{{route('barang.index')}}" class="btn btn-secondary">Balik</a>
        <br />
        <br />
        <form method="post" action="{{route('barang.update',$data->id_barang)}}">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label>Nama </label>
                <input type="text" name="nama" class="form-control" value=" {{ $data->nama }}">

                @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <label>Jenis</label>
                <input type="text" name="jenis" class="form-control" value=" {{ $data->jenis }}">

                @if($errors->has('jenis'))
                <div class="text-danger">
                    {{ $errors->first('jenis')}}
                </div>
                @endif

            </div>
            <br>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" cols="30" rows="10"> {{ $data->deskripsi }} </textarea>

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
