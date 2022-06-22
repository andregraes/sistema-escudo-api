<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CondicaoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(FormatoSeeder::class);
        $this->call(MatriculaSeeder::class);
        $this->call(MatriculaAvulsaSeeder::class);
        $this->call(NivelSeeder::class);
        $this->call(PlanoSeeder::class);
        $this->call(ScormSeeder::class);
        $this->call(SetupSeeder::class);
        $this->call(GeradorCatalogoSeeder::class);
        $this->call(TreinamentoSeeder::class);
        $this->call(PersonalizacaoSeeder::class);
        $this->call(SuporteSeeder::class);
        $this->call(ConteudoProgramaticoSeeder::class);
    }
}
