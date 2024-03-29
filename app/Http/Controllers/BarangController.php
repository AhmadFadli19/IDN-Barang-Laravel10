<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use App\Models\kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $ruangan = Ruangan::all();
        $kategori = kategori::all();
        return view('barang.index', compact('barang', 'ruangan', 'kategori'));
    }

    public function store( Request $request)
    {
        $data = $request->all();
        $data['nomor_barang'] = 'Barang '.' '.random_int(100,999);
        Barang::create($data);
        return redirect('/barang');
    }

    public function show ($id){
        $barang = Barang::find($id);
        return view('barang.detail', compact('barang'));
    }

    public function edit($id) {
        $barang= Barang::find($id);
        $kategori = kategori::all();
        $ruangan = Ruangan::all();
        return view ('barang.edit', compact('barang', 'kategori', 'ruangan'));
    }

    public function update(Request $request, $id){
        $barang = Barang::find($id);
        $data = $request->all();
        $barang->update($data);
        return redirect('/barang');
    }

    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return back();
        
    }
}
