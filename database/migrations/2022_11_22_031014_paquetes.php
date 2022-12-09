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
	    Schema::create('paquetes',function(Blueprint $table){
		    $table->id();
		    $table->string('nombre')->unique();
		    $table->string('descripcion');
		    $table->string('precio');
        $table->timestamp('fecha_creado')->nullable();
        $table->timestamp('fecha_modificado')->nullable();
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('paquetes');
    }
};
