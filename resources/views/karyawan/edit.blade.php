<!-- resources/views/karyawan/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Karyawan</h2>
        <form method="post" action="{{ route('karyawan.update', $karyawan->id) }}">
            @csrf
            @method('PUT')
            
            <label for="nomor_induk">Nomor Induk:</label>
            <input type="text" name="nomor_induk" value="{{ $karyawan->nomor_induk }}" required>
            
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="{{ $karyawan->nama }}" required>
            
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="{{ $karyawan->alamat }}" required>
            
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}" required>
            
            <label for="tanggal_bergabung">Tanggal Bergabung:</label>
            <input type="date" name="tanggal_bergabung" value="{{ $karyawan->tanggal_bergabung }}" required>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>
@endsection
