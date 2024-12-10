<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuiaRemision;

class GuiaRemisionController extends Controller
{

    public function create()
    {
        return view('guiaremision.guia');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Cliente
            'id_cliente' => 'required|integer',
            'cli_tipodoc' => 'nullable|integer',
            'tipodoc' => 'nullable|string|max:4',

            // Serie y Correlativo
            'serie' => 'required|string|max:15',
            'correlativo' => 'required|integer',

            // Fechas y Hora
            'fecha_emision' => 'required|date',
            'hora' => 'nullable|string|max:15',

            // Documentos Relacionados
            'comp_ref' => 'nullable|string|max:15',
            'baja_numdoc' => 'nullable|string|max:50',
            'baja_tipodoc' => 'nullable|string|max:6',
            'rel_numdoc' => 'nullable|string|max:100',
            'rel_tipodoc' => 'nullable|string|max:6',

            // Información de Terceros
            'terceros_tipodoc' => 'nullable|string|max:6',
            'terceros_numdoc' => 'nullable|string|max:15',
            'terceros_nombrerazon' => 'nullable|string|max:180',

            // Datos del Traslado
            'cod_traslado' => 'nullable|string|max:5',
            'uniPeso' => 'nullable|string|max:5',
            'pesoTotal' => 'nullable|numeric',
            'numBultos' => 'nullable|integer',
            'indTransbordo' => 'nullable|string|max:20',
            'modTraslado' => 'nullable|string|max:5',
            'fechaTraslado' => 'nullable|date',

            // Datos del Transporte
            'transp_tipoDoc' => 'nullable|string|max:6',
            'transp_numDoc' => 'nullable|string|max:15',
            'transp_nombreRazon' => 'nullable|string|max:250',
            'transp_placa' => 'nullable|string|max:15',
            'tipoDocChofer' => 'nullable|string|max:6',
            'numDocChofer' => 'nullable|string|max:15',

            // Ubicación
            'ubigeoPartida' => 'nullable|string|max:15',
            'direccionPartida' => 'nullable|string|max:300',
            'ubigeoLlegada' => 'nullable|string|max:15',
            'direccionLlegada' => 'nullable|string|max:300',

            // Observaciones
            'observacion' => 'nullable|string',

            // SUNAT
            'feestado' => 'nullable|string|max:1',
            'fecodigoerror' => 'nullable|string|max:10',
            'femensajesunat' => 'nullable|string',
            'nombrexml' => 'nullable|string|max:50',
            'xmlbase64' => 'nullable|string',
            'cdrbase64' => 'nullable|string',

            // Información adicional
            'tipovehiculo' => 'nullable|string|max:8',
        ]);

        GuiaRemision::create($validated);

        return redirect()->route('guiaremision.guia')->with('success', 'Guía de remisión creada con éxito.');
    }
}
