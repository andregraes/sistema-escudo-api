<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudo_programatico', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->foreignIdFor(\App\Models\ConteudoProgramatico::class, 'fk_idconteudo_programatico')->nullable();
            $table->foreignIdFor(\App\Models\Curso::class, 'fk_idcurso')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conteudo_programaticos');
    }
};
