@extends('layouts.main4')
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
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Varian</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Total</th>
                      <th scope="col">Metode Pembayaran</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $no=1;    
                    @endphp
                    <tr>
                      <td class="text-center">{{ $no++ }}</td>
                      <td>{{ $data->produk['nama_produk'] }}</td>
                      <td>{{ $data->produk->kategori['nama_kategori'] }}</td>
                      <td>{{ $data['jml_pembelian'] }}</td>
                      <td>{{ $data['total'] }}</td>
                      <td>{{ $data->metode_pembayaran['nama_metode'] }}</td>
                      @if ( $data['status'] === 0)
                          <td >Proses</td>
                      @else 
                        <td>Sudah Di Kirim</td>
                      @endif
                      
                    </tr>
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