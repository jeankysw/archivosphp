<?php

use App\Models\raza;
use App\Models\tipo_mascotas;
use App\Models\User;
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
        Schema::create('mascotas', function (Blueprint $table) {
     
            $table->id()->autoIncrement();
            $table->string('name');
            $table->date('fecha_nacimiento');
            $table->string('foto');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(tipo_mascotas::class)->constrained();
            $table->foreignIdFor(raza::class)->constrained();
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
        Schema::dropIfExists('mascotas');
    }
};
