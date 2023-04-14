<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('penyewa')->insert([
            'nama'=>'Enjel',
            'alamat' => 'Jl.Banjaran',
            'no_tlp' => '087654789098',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
        DB::table('penyewa')->insert([
            'nama'=>'Elia',
            'alamat' => 'Jl.Perkutut',
            'no_tlp' => '089654785098',
            'created_at' =>date('Y-m-d H:i:s')
        ]);DB::table('penyewa')->insert([
            'nama'=>'Sinta',
            'alamat' => 'Jl.Laban',
            'no_tlp' => '081658589098',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
    }
}
