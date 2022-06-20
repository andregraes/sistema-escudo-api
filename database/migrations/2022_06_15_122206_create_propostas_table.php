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
        Schema::create('proposta', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['cliente final', 'revenda']);
            $table->decimal('valor', 9, 2);
            $table->string('prazo');
            $table->foreignIdFor(\App\Models\Parceiro::class, 'fk_idparceiro');
            $table->foreignIdFor(\App\Models\Plano::class, 'fk_idplano');
            $table->foreignIdFor(\App\Models\Setup::class, 'fk_idsetup');
            $table->foreignIdFor(\App\Models\Suporte::class, 'fk_idsuporte');
            $table->foreignIdFor(\App\Models\Treinamento::class, 'fk_idtreinamento');
            $table->foreignIdFor(\App\Models\Personalizacao::class, 'fk_idpersonalizacao');
            $table->foreignIdFor(\App\Models\Matricula::class, 'fk_idmatricula');
            $table->foreignIdFor(\App\Models\MatriculaAvulsa::class, 'fk_idmatricula_avulsa');
            $table->foreignIdFor(\App\Models\UsuarioAtivo::class, 'fk_idusuario_ativo');
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
        Schema::dropIfExists('propostas');
    }
};
