@extends('layouts.main')
@section('konten')

    <div class="container-fluid">
        <div class="card mt-3 mx-3" style="border-radius: 15px">
            <div class="card-header fw-bold" style="border-top-left-radius: 15px; border-top-right-radius: 15px">
                Edit Kategori
              </div>
            <div class="card-body px-3">
                    <form action="/admin/update-kategori" method="POST">
                      @csrf
                      <input type="hidden" name="id_kategori" value="{{ $data['id_kategori'] }}">
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control shadow-none" name="nama_kategori" value="{{ $data['nama_kategori'] }}">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

@endsection