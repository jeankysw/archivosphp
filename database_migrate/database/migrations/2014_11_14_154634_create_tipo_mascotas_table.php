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
        Schema::create('tipo_mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->integer('edad_equivalente_joven');
            $table->integer('edad_quivalente_joven');
            $table->integer('edad_adulto');
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
        Schema::dropIfExists('tipo_mascotas');
    }
};
