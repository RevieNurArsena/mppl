<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\user;
use App\Models\ongkir;
use App\Models\metode_pembayaran;
use App\Models\transaksi;
// use Database\Seeders\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user;

    public function index()
    {
        $produk = produk::all();
        $judul = 'Home';
        return view('user.halaman-produk', compact('produk', 'judul'));
    }

    public function index2()
    {
        $produk = produk::all();
        $judul = 'Home';
        return view('user.home', compact('produk', 'judul'));
    }

    public function history(Request $request)
    {
        $judul = 'history belanja';
        $url = '/home';
        $nama = 'home';
        $data = transaksi::find($request->id_user);
        return view('user.history', compact('judul', 'data', 'url', 'nama'));
    }

    public function viewProduk(Request $request)
    {
        $id = $request->id_produk;
        $data = produk::find($id);
        $url = '/home';
        $nama = 'Kembali';
        $judul = 'Detail Produk';
        return view('user.lihat-produk', compact('data', 'judul', 'url', 'nama'));
    }

    public function pesan(Request $request)
    {
        $judul = 'Pesan Produk';
        $id = $request->id_produk;
        $id_user = $request->id_user;
        $data = produk::find($id);
        $metode = metode_pembayaran::all();
        $kota = $request->kota;
        $ongkir = ongkir::where('nama_kota', $kota)->value('ongkir');
        $ongkir_id = ongkir::where('nama_kota', $kota)->value('id_ongkir');
        $url = '/home';
        $nama = 'Kembali';

        if ($request->jumlah == null) {
            $jml = 1;
        } else {
            $jml = $request->jumlah;
        }

        $total = $jml * $data['harga'];
        $total_pem = $total + $ongkir;

        return view('user.halaman-pesanan', compact('data', 'judul', 'total', 'jml', 'metode', 'ongkir', 'total_pem', 'ongkir_id', 'url', 'nama'));
    }

    public function buatPesanan(Request $request)
    {
        // dd($request->all());
        if ($request->id_pembayaran == 1) {

            $data = [
                "user_id" => $request->id_user,
                "produk_id" => $request->id_produk,
                "ongkir_id" => $request->id_ongkir,
                "pembayaran_id" => $request->id_pembayaran,
                "jml_pembelian" => $request->jml,
                "total" => $request->total,
                "status" => false
            ];
            // dd($data);

            transaksi::create($data);
            return redirect('/home');
        } else {
            return view('user.pesan');
        }
    }

    public function prosesLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('sukses', 'berhasil');
        }

        return redirect()->intended('/login')->with('login gagal', 'gagal');
    }

    public function logout()
    {
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Session::flush();
        return redirect('/login');
    }

    public function prosesRegister(Request $request)
    {
        // dd($request->all());
        $data = [
            "password" => bcrypt($request->password),
            "nama" => $request->nama,
            "notelp" => $request->notlp,
            "email" => $request->email,
            "alamat" => $request->alamat,
            "kota" => $request->kota
        ];

        user::create($data);
        return redirect('/login');
    }
}
