<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiaRemision extends Model
{
    use HasFactory;

    // Tabla asociada al modelo
    protected $table = 'GUIAREMISION';

    // Llave primaria
    protected $primaryKey = 'DUAL';

    // Campos asignables en la creación o actualización masiva
    protected $fillable = [
        'SERIEDOC',
        'NUMERODOC',
        'FECHAEMISION',
        'FECHATRASLADO',
        'PUNTOPARTIDA',
        'PUNTOLLEGADA',
        'RAZONSOCIALDESTINATARIO',
        'RUC',
        'PLACA',
        'MARCA',
        'CERTINSCRIPCION',
        'LICENCIACONDUCIR',
        'RAZONSOCIALTRANSPORTE',
        'TIPODOCPAGO',
        'NROCOMPROBANTEPAGO',
        'MOTIVOTRASLADO',
        'RUCTRANSPORTE',
        'TIPOGUIA',
        'PESOTOTAL',
        'DOCREFERENCIA',
        'ENVIOSUNAT',
        'FECHAENVIO',
        'TIPODOCREFERENCIA',
        'CONREFERENCIA',
        'CODIGOTRASLADO',
        'TRASBORDOPROGRAMADO',
        'UNIDADPESO',
        'TOTALPAQUETES',
        'TRANSPORTMODECODE',
        'DNIS',
        'UBIGEOORIGEN',
        'UBIGEODESTINO',
        'CONTENEDOR',
        'AEREOPUERTO',
        'NOTE',
        'NROPEDIDO',
        'ORDENCOMPRA',
        'SCOP',
        'CODIGOPAGO'
    ];

    // Deshabilitar timestamps si no los usas
    public $timestamps = false;
}
