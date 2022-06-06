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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razonsocial',100)->nullable();
            $table->string('cuil',11)->nullable();
            $table->string('telefono1',20)->nullable();
            $table->string('telefono2',20)->nullable();
            $table->string('correo',80)->nullable();
            $table->string('calle_nombre',80)->nullable();
            $table->string('calle_numero',20)->nullable();
            $table->string('codigo_postal',20)->nullable();
            $table->unsignedSmallInteger('barrio_id')->nullable(); //
            $table->unsignedSmallInteger('localidad_id')->nullable();          //
            $table->unsignedSmallInteger('provincia_id')->nullable();          //
            $table->string('contacto_nombre',100)->nullable();
            $table->string('conctacto_correo',100)->nullable();
            $table->string('conctacto_cargo',100)->nullable();
            $table->date('fecha_alta')->nullable();
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
        Schema::dropIfExists('clientes');
    }
};
