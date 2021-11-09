@extends('mahasiswas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 mb-4">
                <h2>JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2 mb-4">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}">
                    Input Mahasiswa
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-4 mb-5" id="list_mahasiswa">
        <thead>
        <tr>
            <th>NIM</th>
            <th>Emai</th>
            <th>Nama</th>
            <th>Tanggal-Lahir</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No HP</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        @foreach ($Mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->email }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->tgl_lahir }}</td>
            <td>{{ $mhs->kelas->nama_kelas}}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->no_hp }}</td>
            <td>
                <form action="{{ route('mahasiswas.destroy', $mhs->nim )}}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswas.show', $mhs->nim) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $mhs->nim) }}">Edit</a>
                    <a class="btn btn-warning" href="{{ route('mahasiswas.', $mhs->id) }}">Nilai</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
