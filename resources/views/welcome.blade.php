<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center mt-3">SELAMAT DATANG PADA WEB CRUD LARAVEL</h1>
    <div class="text-center">
        <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">KELOLA SISWA</a>
    </div>
</body>
</html>