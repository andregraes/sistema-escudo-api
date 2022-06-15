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
        Schema::create('parceiro_endereco', function (Blueprint $table) {
            
            $table->id('idparceiro_endereco');
            $table->string('logradouro',255);
            $table->string('numero',8);
            $table->string('complemento',8);
            $table->string('bairro');
            $table->string('cidade',24);
            $table->string('uf',2);
            $table->foreignIdFor(\App\Models\Parceiro::class, 'fk_idparceiro')->nullable();
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
        Schema::dropIfExists('parceiro_enderecos');
    }
};
