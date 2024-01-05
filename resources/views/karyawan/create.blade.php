<!-- resources/views/karyawan/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="heading-title">Tambah Karyawan</h1>

        <form action="{{ route('karyawan.store') }}" method="POST" class="form">
            @csrf

            <div class="form-group">
                <label for="nomor_induk" class="form-label">Nomor Induk</label>
                <input type="text" id="nomor_induk" name="nomor_induk" class="form-input">
            </div>

            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" name="nama" class="form-input">
            </div>

            <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-input">
            </div>

            <div class="form-group">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-input">
            </div>

            <div class="form-group">
                <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung</label>
                <input type="date" id="tanggal_bergabung" name="tanggal_bergabung" class="form-input">
            </div>

            <div class="form-group-button">
                <button type="submit" class="form-button">Tambah Karyawan</button>
            </div>
        </form>
    </div>
@endsection
