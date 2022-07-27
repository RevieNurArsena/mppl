<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;
use Illuminate\Support\Facades\Storage;

class produkController extends Controller
{

    protected $produk;
    public function __construct()
    {
        $this->produk = new produk();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();
        $kategori = kategori::all();
        $judul = 'Produk';

        return view('admin.produk-admin', compact('produk', 'judul', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            "nama_produk" => "required|min:5",
            "deskripsi" => "required",
            "stok" => "required",
            "kategori_id" => "required",
            "harga" => "required",
            "gambar1" => "required|image",
            "gambar2" => "required|image",
            "gambar3" => "required|image",
            "gambar4" => "required|image",
            "gambar5" => "required|image"
        ]);

        // dd($request);
        $validatedData['deskripsi'] = strip_tags($request->deskripsi);
        $validatedData['gambar1'] = $request->file('gambar1')->store('image');
        $validatedData['gambar2'] = $request->file('gambar2')->store('image');
        $validatedData['gambar3'] = $request->file('gambar3')->store('image');
        $validatedData['gambar4'] = $request->file('gambar4')->store('image');
        $validatedData['gambar5'] = $request->file('gambar5')->store('image');

        produk::create($validatedData);
        return redirect('/admin/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->produk->find($id);
        $kategori = kategori::all();
        $judul = 'Edit Produk';

        return view('edit.edit-produk', compact('data', 'judul', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id_produk = $request->id_produk;

        $validatedData = $request->validate([
            "nama_produk" => "required|min:5",
            "deskripsi" => "required",
            "stok" => "required",
            "kategori_id" => "required",
            "harga" => "required"
            // "gambar1" => "required|image",
            // "gambar2" => "required|image",
            // "gambar3" => "required|image",
            // "gambar4" => "required|image",
            // "gambar5" => "required|image"
        ]);

        $validatedData['deskripsi'] = strip_tags($request->deskripsi);
        if ($request->file('gambar1')) {
            if ($request->gambar1Lama) {
                Storage::delete($request->gambar1Lama);
            }
            $validatedData['gambar1'] = $request->file('gambar1')->store('image');
        }
        if ($request->file('gambar2')) {
            if ($request->gambar2Lama) {
                Storage::delete($request->gambar2Lama);
            }
            $validatedData['gambar2'] = $request->file('gambar2')->store('image');
        }
        if ($request->file('gambar3')) {
            if ($request->gambar3Lama) {
                Storage::delete($request->gambar3Lama);
            }
            $validatedData['gambar3'] = $request->file('gambar3')->store('image');
        }
        if ($request->file('gambar4')) {
            if ($request->gambar4Lama) {
                Storage::delete($request->gambar4Lama);
            }
            $validatedData['gambar4'] = $request->file('gambar4')->store('image');
        }
        if ($request->file('gambar5')) {
            if ($request->gambar5Lama) {
                Storage::delete($request->gambar5Lama);
            }
            $validatedData['gambar5'] = $request->file('gambar5')->store('image');
        }

        produk::find($id_produk)->update($validatedData);
        return redirect('/admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // dd($request->all());
        $data = [
            "gambar1" => $request->gambar1Lama,
            "gambar2" => $request->gambar2Lama,
            "gambar3" => $request->gambar3Lama,
            "gambar4" => $request->gambar4Lama,
            "gambar5" => $request->gambar5
        ];
        if ($data) {
            Storage::delete($data);
        }

        $this->produk->find($id)->delete();
        return redirect('/admin/produk')->with('sukses hapus', 'Menghapus');
    }
}
