<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .action-buttons {
            white-space: nowrap;
        }
        .action-buttons a {
            color:#000;
            text-decoration:none;
        }

        .table-responsive {
            margin-top: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .button_add{
            display: flex;
            justify-content: space-between;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">KANTIN SEKOLAH</h1>

            <div class="mt-4 p-3 bg-light rounded">
                <h3>{{ isset($productDetail)? 'Edit Pesanan':'Tambah Pesanan' }}</h3>
                <form action="{{ isset($productDetail)? route('pesanan.update', ['id'=>$productDetail->id]):route('pesanan.store') }}" method="post">
                    @csrf
                    @if (isset($productDetail))
                        @method('put')
                    @endif
                    <div class="mb-3">
                        <label for="nama_user" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user" value="{{ old('nama_user', $productDetail->nama_user ??'') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_product" class="form-label">Product</label>
                        <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ old('nama_product', $productDetail->nama_product ??'') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga_product" class="form-label">Harga Product</label>
                        <input type="integer" class="form-control" id="harga_product" name="harga_product" min="1" value="{{ old('harga_product', $productDetail->harga_product ??'') }}" required>
                    </div>
                    <div class="button_add">
                        <button type="submit" class="btn btn-primary">{{ isset($productDetail)? 'Simpan':'Tambah' }}</button>
                        <button type="button" class="btn btn-primary">
                        <a href="{{ route('pesanan.index') }}" >
                            <i class="fa-solid fa-eye"></i> LIHAT LIST PESANAN 
                        </a>
                    </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://kit.fontawesome.com/ea0409018d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>