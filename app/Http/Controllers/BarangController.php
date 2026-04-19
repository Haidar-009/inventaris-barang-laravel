<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang; 

class BarangController extends Controller
{
    public function index() {
    $semuaBarang = Barang::all();
    
    // Hitung data analisis
    $totalBarang = Barang::count();
    $totalNilai = Barang::sum(\DB::raw('stok * harga'));
    $stokMenipis = Barang::where('stok', '<', 5)->count();
    $dataKategori = Barang::select('kategori', \DB::raw('count(*) as total'))
                    ->groupBy('kategori')
                    ->pluck('total', 'kategori');

    // Kirim SEMUA variabel ke view 'index'
    return view('index', compact('semuaBarang', 'totalBarang', 'totalNilai', 'stokMenipis', 'dataKategori'));
    }

    

    public function create() {
        return view('tambah');
    }

    public function store(Request $request) {
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

    public function dashboard()
{
    // Data untuk list barang
    $barangs = Barang::all();
    
    // Data untuk statistik
    $totalBarang = Barang::count();
    $totalNilai = Barang::sum(\DB::raw('stok * harga'));
    $stokMenipis = Barang::where('stok', '<', 5)->count();
    $dataKategori = Barang::select('kategori', \DB::raw('count(*) as total'))
                    ->groupBy('kategori')
                    ->pluck('total', 'kategori');

    return view('dashboard', compact('barangs', 'totalBarang', 'totalNilai', 'stokMenipis', 'dataKategori'));
}

    
}
