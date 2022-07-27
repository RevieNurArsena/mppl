@extends('layouts.main')
@section('konten')
                <div class="container-fluid">
                    <div class="row justify-content-center px-3 mt-5">
                        <div class="col">
                            <div class="card" style="height: 150px; border-radius: 15px">
                              <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-6 text-center icon"><i class="bi bi-people-fill" style="font-size: 70px;"></i></div>
                                    <div class="col-6 align-self-center text-center">
                                        <div class="mt-3 lh-sm text-color">
                                            <h5 class="fw-bold">Total User</h5>
                                            <p class="fs-4"> {{$user}} </p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 150px; border-radius: 15px">
                              <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-6 text-center icon"><i class="bi bi-boxes" style="font-size: 70px"></i></div>
                                    <div class="col-6 align-self-center text-center">
                                        <div class="mt-3 lh-sm text-color">
                                            <h5 class="fw-bold" style="">Total Produk</h5>
                                            <p class="fs-4"> {{$produk}} </p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="height: 150px; border-radius: 15px">
                              <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-6 text-center icon"><i class="bi bi-pie-chart-fill" style="font-size: 70px"></i></div>
                                    <div class="col-6 align-self-center text-center">
                                        <div class="mt-3 lh-sm text-color">
                                            <h5 class="fw-bold">Total Order</h5>
                                            <p class="fs-4"> {{$order}} </p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
    
@endsection