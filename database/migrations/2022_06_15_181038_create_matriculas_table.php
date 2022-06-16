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
        Schema::create('matricula', function (Blueprint $table) {
            $table->id('idmatricula');

            $table->foreignIdFor(App\Models\Plano::class, 'fk_idplano')->nullable();
            $table->foreignIdFor(App\Models\Condicao::class, 'fk_idcondicao')->nullable();

            $table->enum('padrao_pacote', ['padrao', 'pacote'])->nullable();
            
            $table->integer('faixa_inicio');
            $table->integer('faixa_fim');
            
            $table->decimal('dias_30_cliente_final',10,2)->nullable(); 
            $table->decimal('dias_60_cliente_final',10,2)->nullable();
            $table->decimal('dias_90_cliente_final',10,2)->nullable();
            $table->decimal('dias_180_cliente_final',10,2)->nullable();
            $table->decimal('dias_360_cliente_final',10,2)->nullable();
           
            $table->decimal('dias_30_revenda',10,2)->nullable();
            $table->decimal('dias_60_revenda',10,2)->nullable();
            $table->decimal('dias_90_revenda',10,2)->nullable();
            $table->decimal('dias_180_revenda',10,2)->nullable();
            $table->decimal('dias_360_revenda',10,2)->nullable();
            
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
        Schema::dropIfExists('matriculas');
    }
};
