@extends('layouts.main')
@section('konten')

            <div class="container-fluid">
                <div class="row justify-content-center px-3 mt-3">
                    <div class="col">
                        <div class="card" style="border-radius: 15px">
                          <div class="card-body">
                            <table class="table table-borderless table-bordered border-secondry">
                              <thead>
                                <tr class="text-center">
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Pembeli</th>
                                  <th scope="col">Nama Produk</th>
                                  <th scope="col">Jumlah Pembelian</th>
                                  <th scope="col">Total</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col">Metode Pembayaran</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($data as $d)
                                  <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $d->user['nama'] }}</td>
                                    <td>{{ $d->produk['nama_produk'] }}</td>
                                    <td class="text-center">{{ $d['jml_pembelian'] }}</td>
                                    <td>Rp {{ $d['total'] }}</td>
                                    <td>{{ $d->user['alamat'] }}</td>
                                    <td>{{ $d->metode_pembayaran['nama_metode'] }}</td>
                                    @if ($d['status'] === 0)
                                      <td>Belum Diproses</td>
                                    @else
                                    <td>Proses Pengiriman</td>
                                    @endif
                                    <td class="text-center">
                                      <form action="/admin/update-status" method="post">
                                        @csrf
                                        <input type="hidden" name="id_transaksi" value="{{ $d['id_transaksi'] }}">
                                        <input type="hidden" name="status" value={{ true }}>
                                        <button type="submit" class="btn btn-success text-white shadow-none"><i class="bi bi-check-lg"></i></i></button>
                                      </form>
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
@endsection