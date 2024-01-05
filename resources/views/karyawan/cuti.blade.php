<!-- index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Sisa Cuti Karyawan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Sisa Cuti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $karyawanItem)
                    <tr>
                        <td>{{ $karyawanItem->nomor_induk }}</td>
                        <td>{{ $karyawanItem->nama }}</td>
                        <td>{{ $karyawanItem->sisa_cuti }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
