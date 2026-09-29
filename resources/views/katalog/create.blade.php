<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-4">Tambah Produk Baru</h3>

                        <!-- Menampilkan Pesan Error Validasi -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kode Produk</label>
                                <input type="text" name="kode" class="form-control" value="{{ old('kode') }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <input type="text" name="kategori" class="form-control" value="{{ old('kategori') }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga (Angka)</label>
                                <input type="number" name="harga" class="form-control" value="{{ old('harga') }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Stok (Angka)</label>
                                <input type="number" name="stok" class="form-control" value="{{ old('stok') }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Singkat</label>
                                <textarea name="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Produk</button>
                            <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>