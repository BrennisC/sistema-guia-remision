<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('guiaremision', function (Blueprint $table) {
            $table->bigInteger('DUAL')->primary()->autoIncrement();
            $table->string('SERIEDOC', 8)->nullable();
            $table->integer('NUMERODOC')->nullable();
            $table->date('FECHAEMISION')->nullable();
            $table->date('FECHATRASLADO')->nullable();
            $table->string('PUNTOPARTIDA', 255)->nullable();
            $table->string('PUNTOLLEGADA', 255)->nullable();
            $table->string('RAZONSOCIALDESTINATARIO', 255)->nullable();
            $table->bigInteger('RUC')->nullable();
            $table->string('PLACA', 128)->nullable();
            $table->string('MARCA', 64)->nullable();
            $table->string('CERTINSCRIPCION', 32)->nullable();
            $table->string('LICENCIACONDUCIR', 16)->nullable();
            $table->string('RAZONSOCIALTRANSPORTE', 255)->nullable();
            $table->string('TIPODOCPAGO', 16)->nullable();
            $table->string('NROCOMPROBANTEPAGO', 16)->nullable();
            $table->string('MOTIVOTRASLADO', 128)->nullable();
            $table->string('RUCTRANSPORTE', 12)->nullable();
            $table->smallInteger('TIPOGUIA')->nullable();
            $table->decimal('PESOTOTAL', 12, 2)->nullable();
            $table->string('DOCREFERENCIA', 255)->nullable();
            $table->smallInteger('ENVIOSUNAT')->default(0);
            $table->date('FECHAENVIO')->nullable();
            $table->string('TIPODOCREFERENCIA', 2)->nullable();
            $table->smallInteger('CONREFERENCIA')->nullable();
            $table->string('CODIGOTRASLADO', 2)->nullable();
            $table->string('TRASBORDOPROGRAMADO', 2)->nullable();
            $table->string('UNIDADPESO', 4)->default('KGM');
            $table->integer('TOTALPAQUETES')->default(1);
            $table->string('TRANSPORTMODECODE', 2)->nullable();
            $table->string('DNIS', 64)->nullable();
            $table->string('UBIGEOORIGEN', 8)->nullable();
            $table->string('UBIGEODESTINO', 8)->nullable();
            $table->string('CONTENEDOR', 8)->nullable();
            $table->string('AEREOPUERTO', 8)->nullable();
            $table->string('NOTE', 128)->nullable();
            $table->string('NROPEDIDO', 64)->nullable();
            $table->string('ORDENCOMPRA', 64)->nullable();
            $table->string('SCOP', 64)->nullable();
            $table->string('CODIGOPAGO', 64)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('guiaremision');
    }
};
