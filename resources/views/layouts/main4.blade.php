<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <title>{{ $judul }}</title>
    <style type="text/css">
      body {
        font-family: poppins;
        overflow-x: hidden;
      }

      .thumb:hover {
        opacity: 0.5;
        cursor: pointer;
      }

      @keyframes fadeIn {
        to {
          opacity: 1;
        }
      }

      .fade {
        opacity: 0;
        animation: fadeIn 0.5s forwards;
      }

      .active {
        opacity: 0.5;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #71221B">
      <div class="text-white d-flex col-4 px-4">
        <a class="" href="#"><img src="{{ asset('assets/img/logo.png') }}" width="70px"></a>
        <a class="ms-3 text-reset text-decoration-none my-auto" href="{{ $url }}"> <div>< {{ $nama }}</div> </a>
      </div>
    <div class="container-fluid justify-content-end">
    <button class="navbar-toggler my-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="container d-flex justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item my-auto text-center">
                <form action="/history-belanja" method="POST">
                  @csrf
                  <input type="hidden" name="id_user" value="{{ Auth::guard('user')->user()->id_user }}">
                  <button type="submit" class="active mx-2 fs-4 bg-transparent text-white border-0"><i class="bi bi-bag-fill"></i></button>
                </form>
              </li>
              <li class="nav-item my-auto text-center">
                <a class="nav-link active fw-bold mx-2 text-white fs-4" href="#"><i class="bi bi-person-fill"></i></a>
              </li>
              <li class="nav-item my-auto text-center">
                <a class="active fw-bold mx-2 text-white fs-4" href="/logout"><i class="bi bi-box-arrow-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    @yield('konten')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>