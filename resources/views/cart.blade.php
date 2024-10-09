<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <style>
        .gradient-custom {
  background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
  }
  ::placeholder {
    color: white;
  }
      </style>
    <title>Document</title>
</head>
<body class="gradient-custom">
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/home">Ini Judul</a>
                    <a href="/auth/logout" onclick="return window.confirm('Apakah anda ingin Logout?')" style="text-decoration: none" class="btn btn-outline-light">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                    </a>
            </div>
        </div>
    </nav>
<section class="h-100">
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">My Cart</h5>
            </div>
            <div class="card-body">
              <!-- Single item -->
              @foreach ($produk as $key => $item)
              <div class="row">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="{{ asset('storage/gambar/'.$item->item->gambar) }}"
                      class="w-100" alt="" />
                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>Nama Produk : {{ $item->item->name }}</strong></p>
                  <p>Kategori : {{ $item->item->kategori }}</p>
                  <p>Harga : Rp.{{ $item->item->harga }}</p>
                  <!-- Data -->
                    <a href="/home/cart/delete/{{ $item->id }}" ><button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-sm me-1 mb-2" data-mdb-tooltip-init
                    title="Remove item">
                    Hapus
                  </button></a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                <label class="form-label" for="form1">Jumlah</label>
                <form action="/home/cart/tambah/{{ $item->id }}" method="post">
                @csrf
                  <div class="mb-4" style="max-width: 300px">
                    <input type="number" class="form-control" value="{{ $item->jumlah }}" name="jumlah">
                    <input type="submit" style="margin-top: 20px; width: 220px" class="btn btn-primary" value="Ubah">
                  </div>
                </form>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start">
                    <strong>Rp. {{$item->subtotal}}</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <hr class="my-4" />
              @endforeach
              <!-- Single item -->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Ringkasan</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total Harga</strong>
                  </div>
                  <span><strong>Rp. {{ $total }}</strong></span>
                </li>
              </ul>
                <form action="/home/cart/pesan" method="post">
                    @csrf
                    <input type="submit" class="btn btn-info text-white" onclick="return window.confirm('Pesanan sudah sesuai? Anda tidak bisa kembali ke halaman ini setelah memesan')" value="Pesan Sekarang"></input>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</html>
