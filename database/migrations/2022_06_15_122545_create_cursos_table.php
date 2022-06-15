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
            $table->id('idcurso');
            $table->string('referencia');
            $table->string('nome');
            $table->boolean('is_reciclagem');
            $table->decimal('valor',6,2);
            $table->integer('validade');
            $table->foreignIdFor(\App\Models\Formato::class, 'fk_idformato')->nullable();
            $table->foreignIdFor(\App\Models\Nivel::class, 'fk_idnivel')->nullable();
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
