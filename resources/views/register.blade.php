<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @media (min-width: 1025px) {
            .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }

.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.bg-indigo {
background-color: #4835d4;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
    </style>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
</head>
<body>
    <section class="h-100 h-custom gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2 bg-transparent" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-6">
                      <div class="p-5">
                        <form action="/createuser" method="post">
                            @csrf
                            <h3 class="fw-normal mb-5 text-white">Informasi Umum</h3>

                            <div class="mb-4 pb-2">
                                <div data-mdb-input-init class="form-outline">
                                <input type="text" id="form3Examplev4" name="name" class="form-control form-control-lg" required/>
                                <label class="form-label text-white"  for="form3Examplev4">Nama Lengkap</label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div data-mdb-input-init class="form-outline form-white">
                                <input type="email" id="form3Examplea9" name="email" class="form-control form-control-lg" required/>
                                <label class="form-label text-white" for="form3Examplea9">Email</label>
                                </div>
                            </div>

                            <div class="mb-4 pb-2">
                                <div data-mdb-input-init class="form-outline form-white">
                                <input type="number" id="form3Examplea6" name="no" class="form-control form-control-lg" required/>
                                <label class="form-label text-white"  for="form3Examplea6">Nomor Telpon</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-4 pb-2">
                                    <div data-mdb-input-init class="form-outline form-white">
                                    <input type="password" id="form3Examplea6" name="password" class="form-control form-control-lg" required />
                                    <label class="form-label text-white"  for="form3Examplea6">Password</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                        <div class="col-lg-6 bg-transparent text-white">
                        <div class="p-5">
                            <h3 class="fw-normal mb-5">Informasi Tambahan</h3>
                            <div class="mb-4 pb-2">
                            <div data-mdb-input-init class="form-outline form-white">
                                <input type="text" id="form3Examplea2" name="jalan" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form3Examplea2">Nama Jalan</label>
                            </div>
                            </div>

                            <div class="mb-4 pb-2">
                            <div data-mdb-input-init class="form-outline form-white">
                                <input type="text" id="form3Examplea3" name="kab" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form3Examplea3">Kabupaten/Kota</label>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col-md-5 mb-4 pb-2">

                                <div data-mdb-input-init class="form-outline form-white">
                                <input type="text" id="form3Examplea4" name="pos" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form3Examplea4">Kode Pos</label>
                                </div>

                            </div>
                            <div class="col-md-7 mb-4 pb-2">

                                <div data-mdb-input-init class="form-outline form-white">
                                <input type="text" id="form3Examplea5" name="kec" class="form-control form-control-lg" required/>
                                <label class="form-label"  for="form3Examplea5">Kecamatan</label>
                                </div>

                            </div>
                            </div>

                            <div class="mb-4">
                                <div data-mdb-input-init class="form-outline form-white">
                                <input type="text" id="form3Examplea9" name="detail" class="form-control form-control-lg" required/>
                                <label class="form-label" for="form3Examplea9">Detail Tambahan</label>
                                </div>
                            </div>

                            <div class="form-check d-flex justify-content-start mb-4 pb-3">
                            <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label text-white" for="form2Example3">
                                Saya Menerima <a href="#!" class="text-white"><u>Syarat dan Ketentuan</u></a> Situs Ini
                            </label>
                            </div>

                            <input type="submit" value="Register" class="btn btn-outline-light w-100"></input>
                        </form>
                      </div>
                    </div>
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
