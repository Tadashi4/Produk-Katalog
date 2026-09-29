<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Katalog Produk - UMKM Siswa SMK</title>
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
        <h2 class="mb-4 text-center">Katalog Produk Kreatif</h2>

        <!-- Form Pencarian (Berdasarkan Nama atau Kategori) -->
        <form action="{{ route('katalog.index') }}" method="GET" class="input-group mb-4 shadow-sm">
            <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama produk atau kategori..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
            @if(request('search'))
                <a href="{{ route('katalog.index') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
        </form>

        <!-- Daftar Produk dalam Card Grid -->
        <div class="row">
            @forelse($produks as $p)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-secondary mb-2 align-self-start">{{ $p->kategori }}</span>
                            <h5 class="card-title">{{ $p->nama_produk }}</h5>
                            <h6 class="text-success fw-bold mb-3">Rp {{ number_format($p->harga, 0, ',', '.') }}</h6>
                            <p class="card-text text-muted small flex-grow-1">{{ Str::limit($p->deskripsi, 50) }}</p>
                            <p class="card-text"><small class="text-danger">Stok: {{ $p->stok }}</small></p>
                            <a href="{{ route('katalog.show', $p->id) }}" class="btn btn-outline-primary btn-sm mt-auto">Detail Produk</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center" role="alert">
                        Produk yang Anda cari tidak ditemukan.
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>