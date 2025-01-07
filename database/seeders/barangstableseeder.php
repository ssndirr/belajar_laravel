<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class barangstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Mobil','merk'=>'Bmw','harga'=>'RP.-120.000.00'],
            ['nama_barang'=>'Motor','merk'=>'Suzuki','harga'=>'RP.-30.000.00'],
            ['nama_barang'=>'Sepeda','merk'=>'Bmx','harga'=>'RP.-15.000.00'],
            ['nama_barang'=>'Laptop','merk'=>'Apple','harga'=>'RP.-20.000.00'],
            ['nama_barang'=>'Hanphone','merk'=>'Vivo','harga'=>'RP.-10.000.00']
        ];
        // masukan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
