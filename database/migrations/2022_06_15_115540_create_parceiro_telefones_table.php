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
        Schema::create('parceiro_telefone', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->enum('tipo', ['comercial', 'whatsapp', 'celular']);
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
        Schema::dropIfExists('parceiro_telefones');
    }
};
