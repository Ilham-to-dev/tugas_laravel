<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Blog</title>
</head>
<body>
    <!-- Menampilkan variabel $judul -->
    <h1>{{ $judul }}</h1>

    <h3>Daftar Artikel Belajar:</h3>
    <ul>
        <!-- Perulangan foreach bawaan Blade -->
        @foreach($artikel as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>