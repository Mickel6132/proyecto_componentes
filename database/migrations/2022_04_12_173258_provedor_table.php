<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProvedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedor', function (Blueprint $table) {
            $table->id('pro_id');
            $table->string('pro_nombre');
            $table->string('pro_telefono');
            $table->string('pro_cedula');
            $table->string('pro_direccion');
            $table->string('pro_detalle');
            $table->string('pro_cantidad');
            
            $table->rememberToken();
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
        Schema::dropIfExists('provedor');
    }
}
