<!-- resources/views/karyawan/listCuti.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>List Cuti Karyawan</h1>

    <!-- Tampilkan daftar karyawan yang pernah mengambil cuti -->
    <h2>Karyawan yang Pernah Mengambil Cuti:</h2>
    <ul>
        @foreach($karyawanCuti as $karyawan)
            <li>{{ $karyawan->nama }}</li>
        @endforeach
    </ul>

    <!-- Tampilkan sisa cuti setiap karyawan -->
    <h2>Sisa Cuti Setiap Karyawan:</h2>
    <table>
        <thead>
            <tr>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Sisa Cuti</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisaCuti as $karyawan)
                <tr>
                    <td>{{ $karyawan->nomor_induk }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->sisa_cuti }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
