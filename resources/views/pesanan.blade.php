<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelanggan</title>
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
<body style="overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
        <div class="container px-2 px-lg-3">
            <a class="navbar-brand" href="/index">Ini Judul</a>
            <div style="margin-right: 400px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/index/pelanggan">Pelanggan</a>
                    </li>
                </ul>
            </div>
            <form action="/index/findorder" method="POST" class="d-flex">
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
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 400px">
            <h4 class="text-center" style="margin: 50px">Daftar Pesanan</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->item->name }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->subtotal }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="/index/cart/update/{{ $item->id_user }}" class="btn btn-info text-white" onclick="return window.confirm('Yakin ubah data ini?')">Selesai</a>
                            <a href="/index/cart/delete/{{ $item->id_user }}" class="btn btn-danger text-white" onclick="return window.confirm('Yakin hapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <footer class="container-fluid py-3 fixed-bottom gradient-custom" style="bottom: 0; position: relative">
        <p class="m-0 text-center text-white">Copyright &copy; Januardi 2024</p>
    </footer>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</html>
