<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenRMASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_rmas', function (Blueprint $table) {
            $table->bigIncrements('id_orden_rma');

            $table->unsignedBigInteger('id_encargado');
            $table->foreign('id_encargado')->references('id_encargado')->on('encargados');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->unsignedBigInteger('id_estado_rma');
            $table->foreign('id_estado_rma')->references('id_estado_rma')->on('estado_rmas');
            $table->unsignedBigInteger('id_nota_credito')->nullable();
            $table->foreign('id_nota_credito')->references('id_nota_credito')->on('nota_creditos');
            $table->unsignedBigInteger('id_solucion');
            $table->foreign('id_solucion')->references('id_solucion')->on('solucions');

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
        Schema::dropIfExists('orden_r_m_a_s');
    }
}
