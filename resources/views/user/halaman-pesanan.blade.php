@extends('layouts.main4')
@section('konten')

<div class="container-fluid">
  <div class="row">
    <div class="col-12 px-5 mt-3">
      <div class="card" style="background-color: #F3F0D7">
        <div class="card-body">

          <div class="row">
            <div class="col-4 ">
              <img src="{{ asset('assets/img/icon3.png') }}" width="15px" class="me-2">Alamat Pengirim
              <p class="mt-2 ms-4">{{ Auth::guard('user')->user()->nama }} (+62) <br> {{ Auth::guard('user')->user()->notelp }}</p>  
            </div>

            <div class="col-5 align-self-center ">
              <p>{{ Auth::guard('user')->user()->alamat }} <br> Kota : {{ Auth::guard('user')->user()->kota }} </p>
            </div>

            <div class="col-3 align-self-center text-end">
              <a href="#" class="btn text-primary me-3">Ubah</a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-12 px-5 mt-3">

      <div class="card">
        <div class="card-body mx-4">

          <table class="table table-borderless">
            <thead class="">
              <tr>
                <th class="col-2">Produk Dipesan</th>
                <th class="col-3"></th>
                <th class="col"></th>
                <th class="col">Harga</th>
                <th class="col">Jumlah</th>
                <th class="col text-end">Sub Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="{{ asset('storage/' . $data['gambar1']) }}" width="100px"></td>
                <td>{{ $data['nama_produk'] }}</td>
                <td>Variasi : {{ $data->kategori['nama_kategori'] }}</td>
                <td>Rp {{ $data['harga'] }}</td>
                <td>{{ $jml }}</td>
                <td class="text-end">Rp {{ $total }}</td>
              </tr>
            </tbody>
          </table>

        </div>

        <div class="card-body border-top">
          <div class="row mx-4">
            <div class="col-8">
              <div class="mb-2 d-flex justify-content-start">
                  <label class="form-label my-auto me-3">Pesan  : </label>
                  <input type="text" disabled class="form-control w-50 bg-transparent shadow-none" name="pesan" placeholder="(Opsional) Tinggalkan pesan ke penjual">
              </div>
              <div class="mb-2 d-flex justify-content-start">
                  <label class="form-label my-auto" style="margin-right: 12px">Diskon :</label>
                  <input type="text" disabled class="form-control bg-transparent shadow-none" name="pesan" placeholder="Masukkan Kode Diskon" style="width: 30%">
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3 d-flex justify-content-end mt-2">
                  <label class="form-label my-auto me-5">Total Berat :</label>
                  <p class="my-auto ms-5">Rp {{ $ongkir }}</p>  
              </div>

              <div class="d-flex justify-content-end mt-4">
                  <label class="form-label my-auto me-4">Total Pesanan (1 Produk) :</label>
                  <p class="my-auto text-danger fs-5 ms-4">Rp {{ $total }}</p>  
              </div>
            </div>
          </div>
        </div>        
      </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col-12 px-5 mt-3">
        <form action="/buat-pesanan" method="POST">
          @csrf
          <input type="hidden" name="id_user" value="{{ Auth::guard('user')->user()->id_user }}">
          <input type="hidden" name="id_produk" value="{{ $data['id_produk'] }}">
          <input type="hidden" name="id_ongkir" value="{{ $ongkir_id }}">
          <input type="hidden" name="jml" value="{{ $jml }}">
          <input type="hidden" name="total" value="{{ $total_pem }}">
          
        <div class="card" style="background-color: #71221B">
          <div class="card-body mx-4">
              <div class="d-flex justify-content-start">
                <label class="form-label my-auto text-white me-3 fs-5">Metode Pembayaran</label>
                @foreach ($metode as $data)
                  <input type="radio" class="btn-check" name="id_pembayaran" value="{{ $data['id_pembayaran'] }}" id="btnradio{{ $data['id_pembayaran'] }}" autocomplete="off">
                  <label class="btn btn-outline-secondary text-white m-2" for="btnradio{{ $data['id_pembayaran'] }}">{{ $data['nama_metode'] }}</label>
                @endforeach
              </div>
          </div>

          <div class="card-body border-top">
            <div class="row justify-content-end">
              <div class="col-4 me-5 p-0 text-end text-white">
                <div class="row">
                  <div class="col">
                    <p>Subtotal untuk Produk :</p>
                    <p>Ongkos Kirim  :</p>
                    <p>Total Pembayaran :</p>
                  </div>
                  <div class="col">
                    <p>Rp {{ $total }}</p>
                    <p>Rp {{ $ongkir }}</p>
                    <p class="fs-5">Rp {{ $total_pem }}</p>
                  </div>
                </div>
                <button type="submit" class="btn btn-light w-50">Buat Sekarang</button>
              </form>
              </div>
            </div>
              
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

@endsection
