<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class poststableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepat Pintar','content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Belajar ?','content'=>'lorem ipsum'],
            ['title'=>'Membagun Visi Misi Kesuksesan','content'=>'lorem ipsum']
        ];
        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
