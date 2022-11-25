@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Tambah Siswa</h2>
            </div>
            <div>
                <a class="btn btn-warning" href="{{ route('siswa.index') }}"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIS</strong>
                    <input type="text" name="nis" class="form-control" placeholder="NIS">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Siswa</strong>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Siswa"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kelas</strong>
                    <input type="text" class="form-control" name="kelas" placeholder="Kelas"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</button>
            </div>
        </div>

    </form>
@endsection
