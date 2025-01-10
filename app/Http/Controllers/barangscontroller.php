<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class barangscontroller extends Controller
{
    public function menampilkan(){
        
    //nampil semua
    $barang = barang::all();
    // nampil sesuai id
    // $barang = barang::where('id',1)->get();
    // nampil sesuai kata
    // $barang = barang::where('nama_barang','LIKE','%mobil%')->get();
    return view('tampil_barang',compact('barang'));
    }
}
