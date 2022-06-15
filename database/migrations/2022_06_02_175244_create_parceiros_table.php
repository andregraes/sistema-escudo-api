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
        Schema::create('parceiro', function (Blueprint $table) {
            $table->id('idparceiro');
            $table->string('nome',255);
            $table->string('email',255)->nullable();
            $table->string('site',200)->nullable();
             $table->string('cor_principal',10);
             $table->string('cor_secundaria',10);
             $table->binary('logo');
            $table->foreignIdFor(\App\Models\Catalogo::class, 'fk_idcatalogo')->nullable();
$table->foreignIdFor(\App\Models\ParceiroEndereco::class, 'fk_idparceiro_endereco')->nullable();
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
        Schema::dropIfExists('parceiros');
    }
};
