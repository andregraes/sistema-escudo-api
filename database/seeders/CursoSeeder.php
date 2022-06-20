<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('curso')->insert([
            'referencia' => "001400",
            'nome' => "5S - Ferramentas da Qualidade - Contínuo",
            'is_reciclagem' =>  0,
            'valor' => 0.0,
            'validade' => 2,
            'carga_horaria' => 16,
            'thumbnail' => '',
            'fk_idformato' => 1,
            'fk_idnivel' => 4,
            'fk_idscorm' => 1,
        ]);
        DB::table('curso')->insert([
            'referencia' => "002400",
            'nome' => "Análise de Riscos",
            'is_reciclagem' =>  0,
            'valor' => 0.0,
            'validade' => 2,
            'carga_horaria' => 16,
            'thumbnail' => '',
            'fk_idformato' => 2,
            'fk_idnivel' => 4,
            'fk_idscorm' => 2,

        ]);

        /*'referencia'=>,
            'nome'=>,
            'is_reciclagem'=>,
            'fk_idformato'=>,
            'fk_idnivel'=>,
            'fk_idscorm'=>,
            'valor'=>,
            'validade'=>,
            'carga_horaria'=>,
            'thumbnail'=>,*/
    }
}
