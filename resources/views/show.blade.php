@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2> Detail Siswa</h2>
        </div>
        <div>
            <a class="btn btn-warning" href="{{ route('siswa.index') }}"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>

<div class="row mt-5 justify-content-center">
    <div class="col">
        <div class="card" style="width: 64rem;">
            <div class="card-body">
              <h5 class="card-title">NIS               : {{ $siswa->nis }}</h5>
              <h5 class="card-title">Nama Siswa        : {{ $siswa->nama }}</h5>
              <h5 class="card-title">Kelas             : {{ $siswa->kelas }}</h5>
            </div>
          </div>
</div>
@endsection
