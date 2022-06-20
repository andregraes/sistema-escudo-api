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
        Schema::create('scorm', function (Blueprint $table) {
            $table->id();
            //$table->integer('quantidade');
            $table->decimal('indeterminado_cliente_final', 10, 2);
            $table->decimal('determinado_12_cliente_final', 10, 2);
            $table->decimal('determinado_24_cliente_final', 10, 2);
            $table->decimal('indeterminado_revenda', 10, 2);
            $table->decimal('determinado_12_revenda', 10, 2);
            $table->decimal('determinado_24_revenda', 10, 2);
            $table->foreignIdFor(\App\Models\Curso::class, 'fk_idcurso');
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
        Schema::dropIfExists('scorms');
    }
};
