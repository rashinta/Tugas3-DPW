<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{
    function index(){
        $data['list_produk'] = Produk::all();
        return view('Produk.index', $data);
    }
    function create(){
        return view('Produk.create');
    }
    function store(){
        $Produk = new Produk;
        $Produk->nama = request('nama');
        $Produk->Deskripsi = request('Deskripsi');
        $Produk->Harga = request('Harga');
        $Produk->Stok = request('Stok');
        $Produk->save();
        return redirect('Produk');
    }
    function show($produk){
        $data['produk'] = Produk::find($produk);
        return view('produk.show', $data);
        
    }
    function edit(Produk $produk){
        $data['produk'] =  $produk;
        return view('produk.edit', $data);
    }
    function update(){
    
    }
    function destroy(){
       

    }
}