<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Karyawan</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('karyawan.index') }}">Daftar Karyawan</a></li>
            <li><a href="{{ route('karyawan.create') }}">Tambah Karyawan</a></li>
            <li><a href="{{ route('karyawan.cuti') }}">Daftar Cuti Karyawan</a></li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>
