<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del servicio
            $table->text('descripcion')->nullable(); // Descripción del servicio
            $table->decimal('precio', 10, 2); // Precio del servicio
            $table->string('imagen')->nullable(); // Ruta de la imagen (opcional)
            $table->timestamps(); // Fechas de creación y actualización
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
