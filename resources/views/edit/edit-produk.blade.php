@extends('layouts.main')
@section('konten')

    <div class="container-fluid">
        <div class="card mt-3 mx-3" style="border-radius: 15px">
            <div class="card-header fw-bold" style="border-top-left-radius: 15px; border-top-right-radius: 15px">
                Edit Produk
              </div>
            <div class="card-body px-3">
                <form action="/admin/update-produk " method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_produk" value="{{ $data->id_produk }}">
                    <input type="hidden" name="gambar1Lama" value="{{ $data->gambar1 }}">
                    <input type="hidden" name="gambar2Lama" value="{{ $data->gambar2 }}">
                    <input type="hidden" name="gambar3Lama" value="{{ $data->gambar3 }}">
                    <input type="hidden" name="gambar4Lama" value="{{ $data->gambar4 }}">
                    <input type="hidden" name="gambar5Lama" value="{{ $data->gambar5 }}">
      
                      <div class="mb-3">
                          <label class="form-label">Nama Produk</label>
                          <input type="text" class="form-control shadow-none" name="nama_produk" value="{{$data->nama_produk}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Deskripsi</label>
                          <textarea class="form-control shadow-none" rows="3" name="deskripsi"> {{$data->deskripsi}} </textarea>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Stok</label>
                          <input type="text" class="form-control shadow-none" name="stok" value="{{$data->stok}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Kategori</label>
                          <select class="form-select" aria-label="Default select example" name="kategori_id">
                            <option selected value="{{ $data['kategori_id'] }}"> {{ $data->kategori->nama_kategori }} </option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Harga</label>
                          <input type="text" class="form-control shadow-none" name="harga" value=" {{$data->harga}} ">
                      </div>
                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar 1</label>
                        @if ($data->gambar1)
                            <img src="{{ asset('storage/' . $data->gambar1) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input class="form-control form-control-sm shadow-none" name="gambar1" id="gambar" type="file" onchange="preview1()">
                      </div>
                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar 2</label>
                        @if ($data->gambar2)
                            <img src="{{ asset('storage/' . $data->gambar2) }}" class="img-preview2 img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input class="form-control form-control-sm shadow-none" name="gambar2" id="gambar2" type="file" onchange="preview2()">
                      </div>
                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar 3</label>
                        @if ($data->gambar3)
                            <img src="{{ asset('storage/' . $data->gambar3) }}" class="img-preview3 img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input class="form-control form-control-sm shadow-none" name="gambar3" id="gambar3" type="file" onchange="preview3()">
                      </div>
                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar 4</label>
                        @if ($data->gambar4)
                            <img src="{{ asset('storage/' . $data->gambar4) }}" class="img-preview4 img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input class="form-control form-control-sm shadow-none" name="gambar4" id="gambar4" type="file" onchange="preview4()">
                      </div>
                      <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar 5</label>
                        @if ($data->gambar5)
                            <img src="{{ asset('storage/' . $data->gambar5) }}" class="img-preview5 img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                        <input class="form-control form-control-sm shadow-none" name="gambar5" id="gambar5" type="file" onchange="preview5()">
                      </div>
                      <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
                  
              </div>
            
            </div>
        </div>
    </div>

    <script>
        function preview1() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        function preview2() {
            const image = document.querySelector('#gambar2');
            const imgPreview = document.querySelector('.img-preview2');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        function preview3() {
            const image = document.querySelector('#gambar3');
            const imgPreview = document.querySelector('.img-preview3');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        function preview4() {
            const image = document.querySelector('#gambar4');
            const imgPreview = document.querySelector('.img-preview4');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        function preview5() {
            const image = document.querySelector('#gambar5');
            const imgPreview = document.querySelector('.img-preview5');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>

@endsection