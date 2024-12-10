<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_remision', function (Blueprint $table) {
            $table->id(); // ID primaria
            $table->unsignedBigInteger('id_cliente');
            $table->integer('cli_tipodoc')->nullable();
            $table->string('tipodoc', 4)->nullable();
            $table->string('serie', 15);
            $table->integer('correlativo');
            $table->date('fecha_emision');
            $table->string('hora', 15)->nullable();
            $table->string('comp_ref', 15)->nullable();
            $table->string('baja_numdoc', 50)->nullable();
            $table->string('baja_tipodoc', 6)->nullable();
            $table->string('rel_numdoc', 100)->nullable();
            $table->string('rel_tipodoc', 6)->nullable();
            $table->string('terceros_tipodoc', 6)->nullable();
            $table->string('terceros_numdoc', 15)->nullable();
            $table->string('terceros_nombrerazon', 180)->nullable();
            $table->string('cod_traslado', 5)->nullable();
            $table->string('uniPeso', 5)->nullable();
            $table->float('pesoTotal')->nullable();
            $table->integer('numBultos')->nullable();
            $table->string('indTransbordo', 20)->nullable();
            $table->string('modTraslado', 5)->nullable();
            $table->date('fechaTraslado')->nullable();
            $table->string('transp_tipoDoc', 6)->nullable();
            $table->string('transp_numDoc', 15)->nullable();
            $table->string('transp_nombreRazon', 250)->nullable();
            $table->string('transp_placa', 15)->nullable();
            $table->string('tipoDocChofer', 6)->nullable();
            $table->string('numDocChofer', 15)->nullable();
            $table->string('ubigeoPartida', 15)->nullable();
            $table->string('direccionPartida', 300)->nullable();
            $table->string('ubigeoLlegada', 15)->nullable();
            $table->string('direccionLlegada', 300)->nullable();
            $table->text('observacion')->nullable();
            $table->char('feestado', 1)->nullable();
            $table->string('fecodigoerror', 10)->nullable();
            $table->text('femensajesunat')->nullable();
            $table->string('nombrexml', 50)->nullable();
            $table->text('xmlbase64')->nullable();
            $table->text('cdrbase64')->nullable();
            $table->string('tipovehiculo', 8)->nullable();

            $table->timestamps();

            // Clave foránea
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias_remision');
    }
};
