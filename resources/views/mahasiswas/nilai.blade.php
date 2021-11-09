@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-3">
        <h3 class="text-center mb-5">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
        <h2 class="text-center mb-4">KARTU HASIL STUDI (KHS)</h2>

        @foreach ($mahasiswaMatakuliah as $mhs_mk)
            <p><b>Nama :</b> {{ $mhs_mk->mahasiswa_id->nama }}</p>
            <p><b>NIM :</b> {{ $mhs_mk->mahasiswa_id->nim }}</p>
            <p><b>Kelas :</b> {{ $mhs_mk->mahasiswa_id->nama_kelas }}</p>
        @endforeach

        <table class="mt-4">
            <thead>
                <tr class="text-center text-bold">
                    <th class="text-bold">Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            @foreach ($MahasiswaMatakuliah as $mhsMK)
                <td>{{ $mhsMK->matakuliah_id->nama_matkul }}</td>
                <td>{{ $mhsMK->matakuliah_id->sks }}</td>
                <td>{{ $mhsMK->matakuliah_id->semester }}</td>
                <td>{{ $mhsMK->nilai }}</td>
            @endforeach
        </table>
    </div>
@endsection
