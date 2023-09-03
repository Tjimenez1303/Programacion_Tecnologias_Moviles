<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creamos la estructura de la tabla
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //bigInteger -> Para columna con enteros grandes || unsingned() -> Para que la columna no pueda recibir valores negativos
            $table->bigInteger("category_id")->unsigned();
            //Añadimos una columna con una llave foránea que va a ir conectada a otra columna (categories)
            $table->foreign("category_id")->references("id")->on("categories");
            $table->string("name");
            $table->float("price");
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
        Schema::dropIfExists('products');
    }
};
