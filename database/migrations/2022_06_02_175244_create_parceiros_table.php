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
        Schema::create('parceiros', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('email',255)->nullable();
            $table->string('site',200)->nullable();
            // $table->string('phone',255);
            // $table->string('whatsapp',16);
            // $table->string('street',255);
            // $table->string('street_number',8);
            // $table->string('address_complement',8);
            // $table->string('district');
            // $table->string('city',24);
            // $table->string('state',2);
            // $table->string('main_color',10);
            // $table->string('second_color',10);
            // $table->binary('logo');
            $table->foreignIdFor(\App\Models\Catalogo::class, 'catalogo_id')->nullable();

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
