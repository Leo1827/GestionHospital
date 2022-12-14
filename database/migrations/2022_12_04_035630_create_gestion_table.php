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
        Schema::create('gestion', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_doc_paciente');
            $table->unsignedBigInteger('no_documento')->unsigned();
            $table->unsignedBigInteger('cod_hospital')->unsigned();
            $table->string('fec_ingreso');
            $table->date('fec_salida');
            $table->softDeletes();
            $table->timestamps();
            //Relaciones uno a muchos
            $table->foreign('no_documento')->references('id')->on('pacientes');
            $table->foreign('cod_hospital')->references('id')->on('hospitales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gestion');
    }
};
