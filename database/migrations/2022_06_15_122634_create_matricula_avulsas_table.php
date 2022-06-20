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
        Schema::create('matricula_avulsa', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->decimal('dias_30', 8, 2);
            $table->decimal('dias_60', 8, 2);
            $table->decimal('dias_90', 8, 2);
            $table->decimal('dias_180', 8, 2);
            $table->decimal('dias_360', 8, 2);
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
        Schema::dropIfExists('matricula_avulsas');
    }
};
