<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id_producto');

            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id_marca')->on('marcas');
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedors');
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->string('estado_producto');
            $table->string('n_serie');
            $table->string('n_boleta')->nullable();
            $table->string('n_factura')->nullable();
            $table->string('doc_compra');
            $table->timestamp('fecha_compra');
            $table->string('codigo_compra');


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
        Schema::dropIfExists('productos');
    }
}
