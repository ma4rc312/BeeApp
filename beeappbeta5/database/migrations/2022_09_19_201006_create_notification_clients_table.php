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
        Schema::create('notification_clients', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('Usuaio_id')->nullable();
            $table->foreign('Usuaio_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('notificacion_id')->nullable();
            $table->foreign('notificacion_id')->references('id')->on('notifications')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('notification_clients');
    }
};
