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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('detalle_pedido_id')->nullable();
            $table->foreign('detalle_pedido_id')->references('id')->on('detail_orders')->onUpdate('cascade')->onDelete('cascade');
            
            $table->date('fecha_pedido');
            $table->float('valor_total',12,2);

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
        Schema::dropIfExists('orders');
    }
};
