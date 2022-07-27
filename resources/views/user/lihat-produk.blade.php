@extends('layouts.main4')
@section('konten')


<div class="container-fluid" style="overflow: auto;">
  <div class="row mx-3">
    <div class="col-5 mb-2 py-4 px-4">
        <img src="{{ asset('storage/' . $data['gambar1']) }}" id="mainImage" width="500px" class="jumbo">
        <div class="thumbnail d-flex mt-3 ms-3 mb-5">
          <img src="{{ asset('storage/' . $data['gambar2']) }}" onclick="moveImage({{ asset('storage/' . $data['gambar2']) }})" width="100px" height="100px" class="thumb">
          <img src="{{ asset('storage/' . $data['gambar3']) }}" onclick="moveImage({{ asset('storage/' . $data['gambar3']) }})" width="100px" height="100px" class="thumb mx-4">
          <img src="{{ asset('storage/' . $data['gambar4']) }}" onclick="moveImage({{ asset('storage/' . $data['gambar4']) }})" width="100px" height="100px" class="thumb">
          <img src="{{ asset('storage/' . $data['gambar5']) }}" onclick="moveImage({{ asset('storage/' . $data['gambar5']) }})" width="100px" height="100px" class="thumb mx-4">
        </div>
    </div>

    <div class="col-7 py-4 px-4">
      <h3 class="fw-bold">{{ $data['nama_produk'] }}</h3>
      <h3 class="text-danger px-4 pt-3">Rp {{ $data['harga'] }} </h3>
      <div class="d-flex px-4 pt-3">
        <p class="col-3 py-2">Deskripsi Produk</p>
        <p class="px-2 py-2" style="border: 2px solid">{{ $data['deskripsi'] }}</p>
      </div>
      <div class="d-flex px-4 pt-3">
        <p class="col-3 py-2">Netto</p>
        <p class="px-2 py-2" style="border: 2px solid">Varian {{ $data->kategori['nama_kategori'] }}</p>
      </div>
      <form action="/pesan-produk" method="POST">
        @csrf
        <input type="hidden" name="id_produk" value="{{ $data['id_produk'] }}">
        <input type="hidden" name="kota" value="{{ Auth::guard('user')->user()->kota}}">
        {{-- <input type="hidden" name="id_user" value="{{ $user['id_user'] }}"> --}}
      <div class="d-flex px-4 pt-3">
        <p class="col-3 py-1">Kuantitas</p>
        <div onclick="tambah()" class="border border-end-0 text-center" style="cursor: default; width: 30px; height: 28px;">+</div>
        
          <input type="text" name="jumlah" class="text-center" id="angka" style="width: 40px; height: 28px;">
        
        <div onclick="kurang()" class="border border-start-0 text-center" style="cursor: default; width: 30px; height: 28px;">-</div>
      </div>
      <div class="d-flex px-4 pt-3">
        <p class="col-3 py-1"></p>
        <a href="#" class="btn btn-warning me-2">Masukan Tas Belanja</a>
        <button type="submit" class="btn btn-success ms-2">Belanja Sekarang</a>
      </div>
    </form>
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

    <script>
      var nomer = 2;
      function tambah(){
        const data =  window.nomer++;
        return document.getElementById('angka').innerHTML = data;
      }
      function kurang(){
        const data = window.nomer--;
        return document.getElementById('angka').innerHTML = data;
      }
     function moveImage(url){
      return document.getElementById('mainImage').src =url;
     }
    </script>  

@endsection