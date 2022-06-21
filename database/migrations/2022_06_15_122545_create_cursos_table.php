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
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->string('referencia')->nullable();
            $table->string('nome')->nullable();
            $table->boolean('is_reciclagem')->nullable();
            $table->boolean('pratica_obrigatoria')->nullable();
            $table->string('carga_horaria_pratica')->nullable();
            $table->integer('carga_horaria')->nullable();
            $table->foreignIdFor(\App\Models\Formato::class, 'fk_idformato')->nullable();
            $table->foreignIdFor(\App\Models\Nivel::class, 'fk_idnivel')->nullable();
            $table->decimal('valor', 6, 2)->nullable();
            $table->string('validade')->nullable();
            $table->string('texto_curto')->nullable();
            $table->longText('descricao')->nullable();
            $table->string('video')->nullable();
            $table->binary('thumbnail')->nullable()->nullable();
            $table->foreignIdFor(\App\Models\Scorm::class, 'fk_idscorm')->nullable();

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
        Schema::dropIfExists('cursos');
    }
};
