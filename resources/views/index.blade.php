<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
        <div class="container px-2 px-lg-3">
            <a class="navbar-brand" href="/index">Ini Judul</a>
            <div style="margin-right: 400px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/index/pesanan">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/index/pelanggan">Pelanggan</a>
                    </li>
                </ul>
            </div>
            <form action="/index/search" method="POST" class="d-flex">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" name="cari" aria-label="Search">
                <input class="btn btn-outline-light" type="submit"></input>
            </form>
            <form class="d-flex">
                <a href="/auth/logout" onclick="return window.confirm('Apakah anda ingin Logout?')"
                    style="text-decoration: none" class="btn btn-outline-light">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </a>
            </form>
        </div>
        </div>
    </nav>
    <h3 class="text-center" style="margin-top: 50px">Total Produk</h3>
    <div class="container pt-5" style="padding-bottom: 250px">
        <div class="row">
            <div class="col-md-6">
                <a href="/index/create" class="btn btn-primary">Tambah Data</a><br>
            </div>
            <div class="col-md-6">
            </div>
        </div>
        Total Data Produk: {{ $total_produk }}
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>PRODUK</th>
                    <th>KATEGORI</th>
                    <th>HARGA</th>
                    <th>STOK</th>
                    <th>FOTO</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>Rp. {{ $item->harga }}</td>
                        <td>{{ $item->stok }}</td>
                        <td><img src="{{ asset('storage/gambar/'.$item->gambar) }}" alt=""
                                style="width: 50px; height:50px"></td>
                        <td>
                            <a href="/index/delete/{{ $item->id }}"
                                onclick="return window.confirm('Yakin hapus data ini?')"
                                class="btn btn-danger">Hapus</a>
                            <a href="/index/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="container-fluid py-3 fixed-bottom gradient-custom" style="bottom: 0; position: relative">
        <p class="m-0 text-center text-white">Copyright &copy; Januardi 2024</p>
    </footer>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

</html>
