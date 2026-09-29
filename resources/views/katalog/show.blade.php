<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - UMKM Siswa SMK</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">UMKM SMK</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                <a class="nav-link active" href="{{ route('katalog.index') }}">Katalog Produk</a>
                <a class="nav-link" href="{{ route('admin.produk') }}">Admin CRUD</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">{{ $produk->kategori }}</span>
                        <h2 class="card-title mb-3">{{ $produk->nama_produk }}</h2>
                        <h4 class="text-success fw-bold mb-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
                        
                        <hr>
                        
                        <p><strong>Kode Produk:</strong> {{ $produk->kode }}</p>
                        <p><strong>Stok Tersedia:</strong> <span class="text-danger">{{ $produk->stok }} pcs</span></p>
                        <p><strong>Deskripsi Produk:</strong></p>
                        <p class="text-muted">{{ $produk->deskripsi }}</p>

                        <div class="mt-4">
                            <a href="{{ route('katalog.index') }}" class="btn btn-secondary">Kembali ke Katalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>