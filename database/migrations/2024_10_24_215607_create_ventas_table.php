<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id(); // Campo ID
            $table->unsignedBigInteger('producto_id'); // ID del producto vendido
            $table->string('dni', 8); // DNI del cliente (asumiendo que es un string de 8 caracteres)
            $table->integer('cantidad'); // Cantidad vendida
            $table->decimal('precio_unitario', 8, 2); // Precio unitario del producto
            $table->decimal('total', 10, 2); // Total de la venta
            $table->timestamp('fecha_venta')->default(now()); // Fecha y hora de la venta
            $table->timestamps(); // Campos created_at y updated_at

            // Clave foránea
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}

