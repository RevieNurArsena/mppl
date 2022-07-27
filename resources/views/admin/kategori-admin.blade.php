@extends('layouts.main')
@section('konten')

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
                                  <th scope="col">Nama Kategori</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kategori as $data)
                                  <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td class="text-center">
                                      <a href="/admin/hapus-kategori/{{ $data['id_kategori'] }}" class="btn btn-danger shadow-none"><i class="bi bi-x-lg"></i></a>

                                      <a href="/admin/edit-kategori/{{ $data['id_kategori'] }}" class="btn btn-warning text-white shadow-none"><i class="bi bi-pencil-square"></i></a>
                                        {{-- <button type="submit" class="btn btn-warning text-white shadow-none" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-pencil-square"></i></button> --}}
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
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/admin/tambah-kategori" method="POST">
              @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control shadow-none" name="nama_kategori">
                </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <!-- Modal Update-->
    <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/admin/update-kategori" method="POST">
              @csrf
              <input type="hidden" name="id_kategori" value="{{ $data['id_kategori'] }}">
                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control shadow-none" name="nama_kategori" value="{{ $data['nama_kategori'] }}">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Update</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    
@endsection