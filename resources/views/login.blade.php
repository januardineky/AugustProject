<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="style.css">
    <style>
      .gradient-custom {
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
::placeholder {
  color: white;
}
    </style>
</head>
<body>
    @include('sweetalert::alert')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong bg-transparent" style="border-radius: 1rem; border-color:black 5px">
                <div class="card-body p-5 text-center text-white">

                  <h3 class="mb-5">Login</h3>
                  <form action="/auth/login" method="post">
                  @csrf
                  <div data-mdb-input-init class="form-outline mb-2">
                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" name="email" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" name="password" />
                  </div>

                  <input data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-md btn-block w-100" type="submit"></input>

                  <h5 class="my-4">Belum Punya Akun? <a href="/register" class="text-white">Register</a></h5>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
