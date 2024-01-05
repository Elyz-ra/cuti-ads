<!-- resources/views/karyawan/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detail Karyawan</h2>
        <p><strong>Nomor Induk:</strong> {{ $karyawan->nomor_induk }}</p>
        <p><strong>Nama:</strong> {{ $karyawan->nama }}</p>
        <p><strong>Alamat:</strong> {{ $karyawan->alamat }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $karyawan->tanggal_lahir }}</p>
        <p><strong>Tanggal Bergabung:</strong> {{ $karyawan->tanggal_bergabung }}</p>
    </div>
@endsection
