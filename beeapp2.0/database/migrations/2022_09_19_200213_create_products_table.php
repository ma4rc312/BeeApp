<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('productor_id')->nullable();
            $table->foreign('productor_id')->references('id')->on('producers')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');

            $table->string('nombre_producto',40);
            $table->string('descripcion_producto',100);
            $table->string('imagen_producto',50);
            $table->integer('cantidad_producto');
            $table->date('fecha_producto', 'm/d/Y');
            $table->double('precio', 11,2);
            $table->date('fecha_ven_producto', 'm/d/Y');
            $table->boolean('estado_producto');
            
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
