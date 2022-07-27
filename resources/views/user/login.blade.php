<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
    <style type="text/css">
      body {
        font-family: poppins;
        overflow-x: hidden;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid" style="background-image: url({{ asset('assets/img/login-page.png') }}); background-size: cover; max-height: 100vh">

      <div style="padding: 60px 0px 60px 100px">
        <div class="card mx-5 rounded-5 shadow-sm" style="width: 389px; height: 400px; background-color: rgba(113, 34, 27, .7); border-radius: 10px; backface-visibility: 0.1">
          <div class="card-body text-white mx-3 my-4">
            <div>
              <h4 class="fw-bold mb-3 text-center">LOGIN</h4>
              <hr class="bg-white mb-3" size="4px" width="100%" style="background-color: #fff; opacity: 1">
            </div>
            <form action="/login-user" method="POST" class="mt-4">
              @csrf
              <div class="mb-4">
                <label>Email</label>
                <input type="text" class="form-control bg-transparent text-white border-0 border-bottom rounded-0" name="email" placeholder="Masukan Email" style="">
              </div>
              <div class="mb-4">
                <label>Password</label>
                <input type="password" class="form-control bg-transparent text-white border-0 border-bottom rounded-0" name="password" placeholder="Masukan Password">
              </div>

              <div class="text-center">
                <button class="btn fw-bold text-white w-100 " style="background-color: #6A120A; border-radius: 10px">LOGIN</button>
              </div>
              <div class="mt-2 text-center">
                Belum Punya Akun ? <a href="/register" class="text-decoration-none">Daftar</a>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 my-4 mx-5">
          <div class="">Pembayaran</div>
          <img src="{{ asset('assets/img/image 2.png') }}" alt="g1" width="100px">
          <img class="mx-5" src="{{ asset('assets/img/image 3.png') }}" alt="g2" width="100px">
          <img src="{{ asset('assets/img/image 4.png') }}" alt="g3" width="100px">
          <img class="mx-5" src="{{ asset('assets/img/image 5.png') }}" alt="g4" width="100px">
        </div>      
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
