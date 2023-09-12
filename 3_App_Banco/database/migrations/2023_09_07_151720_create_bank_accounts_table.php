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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); //unsignedBigInteger-> Que va a ser del mismo tipo de dato de la otra tabla
            //Campo con clave foranea
            $table->foreign('user_id') //Clave foranea
                ->on('users') //Que viene de la tabla de usuarios
                ->references('id'); //De la columna id
                //->onDelete('cascade'); //Si yo borro algo de cualquiera de las dos se me borra de ambas

            $table->string('number_account');
            $table->date('date_open');
            $table->string('status')->comment('active, inactive'); //Para poner un comentario a el programador
            $table->float('balance');
            $table->string('type')->comment('ahorros, corriente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};



/*******************************************OTRA FORMA QUE LO HACE*****************************************************************/


// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateBankAccountsTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
//     {
//         Schema::create('bank_accounts', function (Blueprint $table) {
//             $table->id();
//             $table->unsignedBigInteger('user_id'); // unsignedBigInteger-> Que va a ser del mismo tipo de dato de la otra tabla
//             //Campo con clave foranea
//             $table->foreign('user_id') // Clave foranea
//                 ->on('users') // Que viene de la tabla de usuarios
//                 ->references('id'); // De la columna id
//                 //->onDelete('cascade'); // Si yo borro algo de cualquiera de las dos se me borra de ambas
//             $table->string('number_account');
//             $table->date('date_open');
//             $table->string('status')->comment('active, inactive'); // Para poner un comentario a el programador
//             $table->float('balance');
//             $table->string('type')->comment('ahorros, corriente');
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
//     {
//         Schema::dropIfExists('bank_accounts');
//     }
// }