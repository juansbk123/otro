<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_creditos', function (Blueprint $table) {
            $table->bigIncrements('id_nota_credito');

            $table->decimal('precio');
            $table->dateTime('fecha_devolucion');
            $table->dateTime('fecha_venta');
            

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
        Schema::dropIfExists('nota_creditos');
    }
}
