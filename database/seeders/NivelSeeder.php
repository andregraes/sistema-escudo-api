<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nivel')->insert([
            'descricao'=> "básico",
            
        ]);
        DB::table('nivel')->insert([
            'descricao'=> "intermediário",
            
        ]);
        DB::table('nivel')->insert([
            'descricao'=> "avançado",
            
        ]);
        DB::table('nivel')->insert([
            'descricao'=> "geral",
            
        ]);
    }
}
