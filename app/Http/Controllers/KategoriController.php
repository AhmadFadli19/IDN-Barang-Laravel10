<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Kategori::create($data);
        return redirect('kategori');
    }

    public function edit($id) {
        $kategori= Kategori::find($id);
        return view ('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id){
        $kategori = Kategori::find($id);
        $data = $request->all();
        $kategori->update($data);
        return redirect('kategori');
    }

    public function destroy($id){
        $kategori = Kategori::find($id);
        $kategori->delete();
        return back();
        
    }

}
