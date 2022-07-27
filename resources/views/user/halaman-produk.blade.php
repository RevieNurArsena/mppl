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
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #71221B">
      <div class="d-lg-none d-md-block position-absolute top-0 start-0 ms-2">
        <a class="" href="#"><img src="{{ asset('assets/img/logo.png') }}" width="50px"></a>
      </div>
    <div class="container-fluid justify-content-end">
    <button class="navbar-toggler my-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="container d-flex justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item my-auto text-center">
                          <a class="nav-link active fw-bold mx-2" aria-current="page" href="#profil">Profil</a>
                        </li>
                        <li class="nav-item my-auto text-center">
                          <a class="nav-link active fw-bold mx-2" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item d-lg-block d-md-none d-sm-none">
                          <a class="nav-link active fw-bold mx-2" href="#"><img src="{{ asset('assets/img/logo.png') }}" width="50px"></a>
                        </li>
                        <li class="nav-item my-auto text-center">
                          <a class="nav-link active fw-bold mx-2" href="#kritik">Kritik dan Saran</a>
                        </li>
                        <li class="nav-item my-auto text-center">
                          <form action="/history-belanja" method="POST">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ Auth::guard('user')->user()->id_user }}">
                            <button type="submit" class="active mx-2 bg-transparent text-white border-0"><i class="bi bi-bag"></i></button>
                          </form>
                        </li>
                    </ul>
                </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row border-top" id="landing-page">
    <div class="col-12 g-0">
      <img src="{{ asset('assets/img/landing-page2.png') }}" width="100%">
    </div>
  </div>

  <div class="row" id="profil" style="background-image: url({{ asset('assets/img/profile-page.png') }}); background-size: cover; height: 100%;">

    <div class="col-5 d-flex justify-content-center">
      <img class="my-4" src="{{ asset('assets/img/logo.png') }}" width="260px" height="260px">
    </div>
    
    <div class="col-lg-2">
      <div class="text-white mt-3 text-center fs-3 fw-bold">PROFIL</div>
      <div class="d-flex justify-content-center">
        <hr class="bg-white" size="5px" width="107px" style="background-color: #fff; opacity: 1">
      </div>
    </div>
    
    <div class="col-5">
      <p class="text-white mx-3" style="font-size: 14px; margin-top: 80px">Toko Kurma Barokah berdiri sejak tahun (....) Saat ini, kami melakukan inovasi dengan cara penjualan melalui website yang memudahkan pelanggan membeli produk kami tanpa harus datang ke toko kami. <br><br>Dalam website ini tersedia berbagai pilihan jenis kurma dengan harga yang bervariatif serta cara pemesanan yang fleksibel yang akan memudahkan pelanggan dalam memilih kurma sesuai dengan keinginan.</p>
    </div>

  </div>

  <div class="row justify-content-center" id="menu" style="background-color: #F3F0D7">
    <div class="col-12">
      <div class="mt-3 text-center fs-3 fw-bold" style="color: #71221B">MENU</div>
      <div class="d-flex justify-content-center">
        <hr class="" size="5px" width="107px" style="background-color: #71221B; opacity: 1">
      </div>
    </div>

    <div class="col-12 d-flex justify-content-center">
      <div class="row my-5">
        @foreach ($produk as $data)
        <div class="col">
          <div class="card" style="width: 219px; border-radius: 15px; background-color: #BF8B67">
          <img src="{{ asset('storage/' . $data['gambar1']) }}" class="card-img-top w-100" alt="gambar" style="height: 200px; border-radius: 15px 15px 0px 0px">
            <div class="card-body text-white">
              <div class="card-text mb-2 fs-4 fw-bold">{{ $data['nama_produk'] }}</div>
              <div style="font-size: 12px">Rp {{ $data['harga'] }}/{{ $data->kategori['nama_kategori'] }}</div>
            </div>
            <div class="card-footer border-top border-white">
              <form action="/detail-produk" method="POST">
                @csrf
                <input type="hidden" name="id_produk" value="{{ $data['id_produk'] }}">
                <button type="submit" class="btn w-100 text-white shadow-none">Lihat Produk</button>
              </form>
              
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

  <div class="row" id="kritik" style="background-image: url({{ asset('assets/img/g6.png') }}); background-size: cover; height: 100%;">
    <div class="col-12">
      <div class="mt-3 text-center fs-3 fw-bold text-white">KRITIK DAN SARAN</div>
      <div class="d-flex justify-content-center">
        <hr class="" size="5px" width="20%" style="background-color: #fff; opacity: 1">
      </div>
    </div>

    <div class="row justify-content-lg-end g-0">
      <div class="col-lg-5 col-md-12">
        <form action="" method="" class="mx-md-5">

          <hr class="bg-white m-0" size="2px" width="75%" style="background-color: #fff; opacity: 1">
          <div class="mb-2 d-flex justify-content-start">
              <label class="form-label my-auto me-3 text-white">Nama   : </label>
              <input type="text" class="form-control w-50 bg-transparent border-0 shadow-none text-white" name="nama">
          </div>

          <hr class="bg-white m-0" size="2px" width="75%" style="background-color: #fff; opacity: 1">
          <div class="mb-2 d-flex justify-content-start">
              <label class="form-label my-auto me-3 text-white">Email   : </label>
              <input type="text" class="form-control w-50 bg-transparent border-0 shadow-none text-white" name="email">
          </div>

          <hr class="bg-white m-0" size="2px" width="75%" style="background-color: #fff; opacity: 1">
          <div class="mb-2 d-flex justify-content-start">
              <label class="form-label my-auto me-3 text-white">No Telepon   : </label>
              <input type="text" class="form-control w-50 bg-transparent border-0 shadow-none text-white" name="notelp">
          </div>

          <hr class="bg-white m-0" size="2px" width="75%" style="background-color: #fff; opacity: 1">
          <div class="mb-2 d-flex justify-content-start">
              <label class="form-label mt-2 me-3 text-white">Kritik dan Saran   : </label>
              <textarea class="form-control w-50 bg-transparent border-0 shadow-none text-white" rows="8" name="kritik"></textarea>
          </div>

          <hr class="bg-white m-0" size="2px" width="75%" style="background-color: #fff; opacity: 1">
          <button type="submit" class="btn w-75 text-white mt-2 mb-5" style="background-color: #71221B">Kirim</button>          
        </form>
      </div>
    </div>
    
  </div>

  <div class="row" style="background-color: #71221B; height: 335px">
    <div class="col-12">
      <div class="text-center my-5">
        <a class="" href="#"><img src="{{ asset('assets/img/logo.png') }}" width="121px"></a>
        <p class="text-white mt-3"><img class="me-3" src="{{ asset('assets/img/icon1.png') }}" width="20px">Jalan Sultan Iskandar Muda No 17, Ampel, Surabaya, Jawa Timur</p>
        <p class="text-white mt-3"><img class="me-3" src="{{ asset('assets/img/icon2.png') }}" width="20px">0838-4944-4180</p>
      </div>
      
    </div>
  </div>

  </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
