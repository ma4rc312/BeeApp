<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_prod',30);
            $table->string('apellido_prod',30);
            $table->string('cedula_prod',20);
            $table->string('identificacion_comercial',20);
            $table->string('razon_social',30);
            $table->string('email_prod',30);
            $table->string('password',20);
            $table->string('telefono_prod',13);
            $table->string('direccion',20);
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
        Schema::dropIfExists('producers');
    }
}
