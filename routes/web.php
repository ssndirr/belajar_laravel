<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//nyoba
route::get('/home', function(){
    return 'Selamat Datang Di halaman Home';
});

route::get('/about  ', function(){
    return 'Selamat Datang Di halaman About';
});

route::get('/contact', function(){
    return 'Selamat Datang Di halaman Contact';
});

route::get('/siswa',function(){

  $data_siswa = ['keydra','Napis','Opet','Daffa','Agus','Kiki'];

  return view('tampil',compact('data_siswa'));
 });

route::get('/tes/{nama2}/{tl2}/{jk2}/{agamar2}/{alamat2}', function($nama,$tl,$jk,$agama,$alamat){
    return  "Nama :" .$nama. "<br>". 
            "Tempat Lahir :" .$tl. "<br>". 
            "Jenis Kelamin :" .$jk. "<br>". 
            "Agama :" .$agama. "<br>". 
            "Alamat :" .$alamat ;
});

route::get('/hitung/{b1}/{b2}', function($bil1,$bil2){
    return "Bilangan 1 :" .$bil1. "<br>". 
           "Bilangan 2 :" .$bil2. "<br>". 
           "Hasilnya :" .$bil1 + $bil2;
});

route::get('/latihan/{nama}/{tel}/{jenis}/{nb}/{jml}/{bayar}', function($nama,$tel,$jenis,$nb,$jml,$bayar){
           
           if ($jenis === "Handphone") {
              if ($nb === "Poco") {
                $harga = 3000000;
              } elseif ($nb === "Samsung") {
                $harga = 5000000;
              }elseif ($nb === "Iphone") {
                $harga = 15000000;
              }
           } elseif ($jenis === "Laptop") {
              if ($nb === "Lenovo") {
                $harga = 4000000;
              } elseif ($nb === "Acer") {
                $harga = 8000000;
              }elseif ($nb === "Macbook") {
                $harga = 20000000;
              }
           }elseif ($jenis === "Tv") {
              if ($nb === "Tohshiba") {
                $harga = 5000000;
              } elseif ($nb === "Samsung") {
                $harga = 8000000;
              }elseif ($nb === "Lg") {
                $harga = 10000000;
              }else{
                $harga = 0;
              }
           }
        

           $tot = $harga * $jml;

           if ($tot >= 10000000) {
            $cas = 500000;
           }else {
            $cas = 0;
           }

           if ($bayar === "Cash") {
              $potong = 0;
           }elseif ($bayar === "Transfer") {
              $potong = 50000;
           }
           
           $tp = $tot - $cas - $potong;

    return "Nama :" .$nama. "<br>". 
           "Telepon :" .$tel. "<br>---------------------------------------<br>". 
           "Jenis Barang :". $jenis. "<br>". 
           "Nama Barang :". $nb. "<br>". 
           "Harga :" .number_format($harga). "<br>". 
           "Jumlah :" .$jml. "<br>---------------------------------------<br>". 
           "Total :" .number_format($tot). "<br>". 
           "Casback : " .number_format($cas). "<br>". 
           "Pembayaran :" .$bayar. "<br>". 
           "Potongan :" .number_format($potong). "<br>---------------------------------------<br>". 
           "Total Pembayaran :" .number_format($tp) ; 
});