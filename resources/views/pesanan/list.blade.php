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
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">KANTIN SEKOLAH</h1>
        <h4 class="text-center">List Pesanan</h4>

        <!-- Tabel Data Buku -->
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-info">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Product</th>
                        <th>Harga Product</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data Pesanan -->
                    @foreach ($product as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_user }}</td>
                            <td>{{ $item->nama_product }}</td>
                            <td>Rp.{{ $item->harga_product }}K</td>
                            <td class="action-buttons">
                                <button class="btn btn-sm btn-warning">
                                    <a href="{{ route('pesanan.edit', ['id'=>$item->id]) }}">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </button>
                                <form action="{{ route('pesanan.delete', ['id'=>$item->id]) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <a href="{{ route('pesanan.add') }}">
                <button type="button" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i>  TAMBAH PESANAN
                </button>
            </a>
        </div>

    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://kit.fontawesome.com/ea0409018d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>