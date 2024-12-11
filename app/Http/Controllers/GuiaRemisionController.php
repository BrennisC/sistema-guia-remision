<?php

namespace App\Http\Controllers;

use App\Models\GuiaRemision;
use Illuminate\Http\Request;

class GuiaRemisionController extends Controller
{

    // Crear nuevo registro
    public function create()
    {
        return view('guiaremesion.guia');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'SERIEDOC' => 'required|string|max:8', // Serie del documento (máximo 8 caracteres)
            'NUMERODOC' => 'required|integer', // Número de documento
            'FECHAEMISION' => 'required|date', // Fecha de emisión
            'FECHATRASLADO' => 'nullable|date', // Fecha de traslado (opcional)
            'PUNTOPARTIDA' => 'required|string|max:255', // Dirección de partida
            'PUNTOLLEGADA' => 'required|string|max:255', // Dirección de llegada
            'RAZONSOCIALDESTINATARIO' => 'required|string|max:255', // Razón social del destinatario
            'RUC' => 'required|digits:11', // RUC (11 dígitos)
            'PLACA' => 'nullable|string|max:128', // Placa del vehículo
            'MARCA' => 'nullable|string|max:64', // Marca del vehículo
            'CERTINSCRIPCION' => 'nullable|string|max:32', // Certificado de inscripción
            'LICENCIACONDUCIR' => 'nullable|string|max:16', // Licencia de conducir
            'RAZONSOCIALTRANSPORTE' => 'nullable|string|max:255', // Razón social del transportista
            'TIPODOCPAGO' => 'nullable|string|max:16', // Tipo de documento de pago
            'NROCOMPROBANTEPAGO' => 'nullable|string|max:16', // Número de comprobante de pago
            'MOTIVOTRASLADO' => 'required|string|max:128', // Motivo del traslado
            'RUCTRANSPORTE' => 'nullable|digits:11', // RUC del transportista (11 dígitos)
            'TIPOGUIA' => 'nullable|integer|min:0|max:1', // Tipo de guía (ej. 0 = regular, 1 = especial)
            'PESOTOTAL' => 'required|numeric|min:0', // Peso total
            'DOCREFERENCIA' => 'nullable|string|max:255', // Documento de referencia
            'ENVIOSUNAT' => 'nullable|boolean', // Envío a SUNAT (0 = no, 1 = sí)
            'FECHAENVIO' => 'nullable|date', // Fecha de envío a SUNAT
            'TIPODOCREFERENCIA' => 'nullable|string|max:2', // Tipo de documento de referencia
            'CONREFERENCIA' => 'nullable|boolean', // Con referencia (0 = no, 1 = sí)
            'CODIGOTRASLADO' => 'nullable|string|max:2', // Código de traslado
            'TRASBORDOPROGRAMADO' => 'nullable|string|max:2', // Trasbordo programado
            'UNIDADPESO' => 'required|string|max:4|in:KGM', // Unidad de peso (ej. "KGM" para kilogramos)
            'TOTALPAQUETES' => 'nullable|integer|min:0', // Total de paquetes
            'TRANSPORTMODECODE' => 'nullable|string|max:2', // Código del modo de transporte
            'DNIS' => 'nullable|string|max:64', // DNI(s) relacionados
            'UBIGEOORIGEN' => 'nullable|string|max:8', // Ubigeo de origen
            'UBIGEODESTINO' => 'nullable|string|max:8', // Ubigeo de destino
            'CONTENEDOR' => 'nullable|string|max:8', // Contenedor
            'AEREOPUERTO' => 'nullable|string|max:8', // Aeropuerto
            'NOTE' => 'nullable|string|max:128', // Notas adicionales
            'NROPEDIDO' => 'nullable|string|max:64', // Número de pedido
            'ORDENCOMPRA' => 'nullable|string|max:64', // Orden de compra
            'SCOP' => 'nullable|string|max:64', // Código SCOP
            'CODIGOPAGO' => 'nullable|string|max:64', // Código de pago
        ]);


        GuiaRemision::create($validated);

        return redirect()->route('dashboard')->with('success', 'Guía creada exitosamente.');
    }

    // Actualizar registro
    public function edit($id)
    {
        $guia = GuiaRemision::findOrFail($id);
        return view('guias.edit', compact('guia'));
    }

    public function update(Request $request, $id)
    {
        $guia = GuiaRemision::findOrFail($id);

        $validated = $request->validate([
            'SERIEDOC' => 'required|string|max:8',
            'NUMERODOC' => 'required|integer',
            // Agregar más validaciones aquí
        ]);

        $guia->update($validated);

        return redirect()->route('guias.index')->with('success', 'Guía actualizada exitosamente.');
    }

    // Eliminar registro
    public function destroy($id)
    {
        $guia = GuiaRemision::findOrFail($id);
        $guia->delete();

        return redirect()->route('guias.index')->with('success', 'Guía eliminada exitosamente.');
    }
}
