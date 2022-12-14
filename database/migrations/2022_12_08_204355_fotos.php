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
      Schema::create('fotos',function(Blueprint $table){
		    $table->id();
        $table->string('id_categoria');
		    $table->string('id_usuario');
		    $table->string('nombre');
        $table->string('descripcion');
        $table->string('url');
		    $table->string('categoria');
        $table->string('tipo');
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
      Schema::dropIfExists('fotos');
    }
};
