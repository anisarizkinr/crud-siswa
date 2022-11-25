@extends('layout')
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>CRUD Siswa</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('siswa.create') }}"><i class="fa-solid fa-plus"></i> Tambah Siswa</a>
            </div>
        </div>
    </div>

    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th width="280px">Action</th>
        </tr>
        </thead>

        <tbody>
            @foreach ($siswa as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kelas }}</td>
                <td>
                    <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('siswa.show', $item->id) }}"><i class="fa-solid fa-eye"></i></a>

                        <a class="btn btn-warning" href="{{ route('siswa.edit', $item->id) }}"><i class="fa-solid fa-pencil"></i></a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
    <div class="row text-center">
        {{ $siswa->links() }}
    </div>
@endsection
