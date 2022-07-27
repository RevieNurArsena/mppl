<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\User;
use App\Models\transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        $judul = "Dashboard Admin";
        $produk = produk::count();
        $user = User::count();
        $order = transaksi::count();

        return view('admin.dashboard', compact('produk', 'user', 'order', 'judul'));
    }
}
