@extends('layouts.main')
@section('konten')
{{-- @dump($produk); --}}
            <div class="container-fluid">
                <div class="row justify-content-center px-3 mt-3">
                    <div class="col">
                        <div class="card" style="border-radius: 15px">
                          <div class="card-body">
                            <div class="text-end pb-3">
                                <button type="button" class="btn btn-success rounded-pill shadow-none" data-bs-toggle="modal" data-bs-target="#modelTambah">Tambah</button>
                            </div>
                            <table class="table table-borderless table-bordered border-secondry">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Produk</th>
                                  <th scope="col">Deskripsi</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col">Harga</th>
                                  <th scope="col">Kategori</th>
                                  <th scope="col">Gambar 1</th>
                                  <th scope="col">Gambar 2</th>
                                  <th scope="col">Gambar 3</th>
                                  <th scope="col">Gambar 4</th>
                                  <th scope="col">Gambar 5</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                  $no = 1;
                                @endphp
                                @foreach($produk as $data)
                                <tr>
                                  <td class="text-center"> {{ $no++ }} </td>
                                  <td> {{$data['nama_produk']}} </td>
                                  <td> {{$data['deskripsi']}} </td>
                                  <td> {{$data['stok']}} </td>
                                  <td> {{$data['harga']}} </td>
                                  <td> {{$data->kategori->nama_kategori ?? 'None'}} </td>
                                  <td>
                                    <img alt="image1" src="{{ asset('storage/' . $data['gambar1']) }}" style="max-width: 60px">
                                  </td>
                                  <td>
                                    <img alt="image2" src="{{ asset('storage/' . $data['gambar2']) }}" style="max-width: 60px">
                                  </td>
                                  <td>
                                    <img alt="image3" src="{{ asset('storage/' . $data['gambar3']) }}" style="max-width: 60px">
                                  </td>
                                  <td>
                                    <img alt="image4" src="{{ asset('storage/' . $data['gambar4']) }}" style="max-width: 60px">
                                  </td>
                                  <td>
                                    <img alt="image5" src="{{ asset('storage/' . $data['gambar5']) }}" style="max-width: 60px">
                                  </td>
                                  <td class="text-center">
                                      <a href="/admin/hapus-produk/{{ $data['id_produk'] }}" class="btn btn-danger shadow-none"><i class="bi bi-x-lg"></i></a>
                                      
                                      <a href="/admin/edit-produk/{{ $data['id_produk'] }}" class="btn btn-warning text-white shadow-none"><i class="bi bi-pencil-square"></i></a>
                                  </td>
                                </tr>
                                 @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

    <!-- Modal Tambah-->
    <div class="modal fade" id="modelTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/admin/tambah-produk" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" class="form-control shadow-none" name="nama_produk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control shadow-none" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="text" class="form-control shadow-none" name="stok">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                      <select class="form-select" id="" name="kategori_id">
                          @foreach ($kategori as $k)
                            <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                          @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control shadow-none" name="harga">
                </div>
                <div class="mb-3">
                  <label for="formFileSm" class="form-label">Gambar 1</label>
                  <input class="form-control form-control-sm shadow-none" name="gambar1" id="formFileSm" type="file">
                </div>
                <div class="mb-3">
                  <label for="formFileSm" class="form-label">Gambar 2</label>
                  <input class="form-control form-control-sm shadow-none" name="gambar2" id="formFileSm" type="file">
                </div>
                <div class="mb-3">
                  <label for="formFileSm" class="form-label">Gambar 3</label>
                  <input class="form-control form-control-sm shadow-none" name="gambar3" id="formFileSm" type="file">
                </div>
                <div class="mb-3">
                  <label for="formFileSm" class="form-label">Gambar 4</label>
                  <input class="form-control form-control-sm shadow-none" name="gambar4" id="formFileSm" type="file">
                </div>
                <div class="mb-3">
                  <label for="formFileSm" class="form-label">Gambar 5</label>
                  <input class="form-control form-control-sm shadow-none" name="gambar5" id="formFileSm" type="file">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </form>
      </div>
    </div>

<script>
        function preview() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
    
@endsection