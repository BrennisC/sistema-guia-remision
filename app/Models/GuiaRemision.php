<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuiaRemision extends Model
{
    use HasFactory;

    protected $table = 'guias_remision'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id'; // Llave primaria

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'id_cliente',
        'cli_tipodoc',
        'tipodoc',
        'serie',
        'correlativo',
        'fecha_emision',
        'hora',
        'comp_ref',
        'baja_numdoc',
        'baja_tipodoc',
        'rel_numdoc',
        'rel_tipodoc',
        'terceros_tipodoc',
        'terceros_numdoc',
        'terceros_nombrerazon',
        'cod_traslado',
        'uniPeso',
        'pesoTotal',
        'numBultos',
        'indTransbordo',
        'modTraslado',
        'fechaTraslado',
        'transp_tipoDoc',
        'transp_numDoc',
        'transp_nombreRazon',
        'transp_placa',
        'tipoDocChofer',
        'numDocChofer',
        'ubigeoPartida',
        'direccionPartida',
        'ubigeoLlegada',
        'direccionLlegada',
        'observacion',
        'feestado',
        'fecodigoerror',
        'femensajesunat',
        'nombrexml',
        'xmlbase64',
        'cdrbase64',
        'tipovehiculo',
    ];
}
