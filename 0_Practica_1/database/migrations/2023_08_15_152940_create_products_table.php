<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); //Para definir un atributo en la clave primaria

            //*****************Crear campos**************************************
            //Campo del nombre del producto
            $table->string('name');
            //Campo del precio del producto
            $table->float('price',8,2); //Los numeros significan la cantidad de caracteres que va a tener


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
