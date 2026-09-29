<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog UMKM Siswa SMK</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">UMKM SMK</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('home') }}">Beranda</a>
                <a class="nav-link" href="{{ route('katalog.index') }}">Katalog Produk</a>
                <a class="nav-link" href="{{ route('admin.produk') }}">Admin CRUD</a>
            </div>
        </div>
    </nav>

    <!-- Hero / Banner Section -->
    <div class="container my-5">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-primary">Katalog UMKM Siswa SMK</h1>
                <p class="col-md-8 fs-4 mx-auto text-muted">
                    Platform digital resmi untuk menampilkan dan memasarkan produk-produk kreatif hasil karya siswa SMK.
                </p>
                <a href="{{ route('katalog.index') }}" class="btn btn-primary btn-lg mt-3">Lihat Katalog Produk</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>