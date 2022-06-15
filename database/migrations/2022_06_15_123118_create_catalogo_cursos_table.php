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
        Schema::create('catalogo_curso', function (Blueprint $table) {
//            $table->id();
$table->foreignIdFor(\App\Models\Catalogo::class, 'fk_idcatalogo');
$table->foreignIdFor(\App\Models\Curso::class,'fk_idcurso');
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
        Schema::dropIfExists('catalogo_cursos');
    }
};
