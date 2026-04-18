<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; // Pastikan Model Barang sudah ada

class BarangController extends Controller
{
    public function index() {
        $semuaBarang = Barang::all();
        return view('index', compact('semuaBarang'));
    }

    public function create() {
        return view('tambah');
    }

    public function store(Request $request) {
        // Simpan data ke database
        Barang::create($request->all());
        return redirect('/');
    }

    public function destroy($id) {
    Barang::destroy($id);
    return redirect('/');
    }

    public function edit($id) {
        $barang = \App\Models\Barang::findOrFail($id);
        return view('edit', compact('barang'));
    }

    public function update(Request $request, $id) {
        $barang = \App\Models\Barang::findOrFail($id);
        $barang->update($request->all());
        return redirect('/')->with('success', 'Data berhasil diupdate!');
    }
}
