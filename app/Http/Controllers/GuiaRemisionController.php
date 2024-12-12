<?php

namespace App\Http\Controllers;

use App\Models\GuiaRemision;
use Illuminate\Http\Request;

class GuiaRemisionController extends Controller
{

    // Crear nuevo registro
    public function create()
    {
        return view('guiaremision.guia');
    }

    public function store(Request $request)
    {
        $request->validate([
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
            'TIPOGUIA' => 'nullable|string', // Tipo de guía (ej. 0 = regular, 1 = especial)
            'PESOTOTAL' => 'required|numeric|min:0', // Peso total
            'DOCREFERENCIA' => 'nullable|string|max:255', // Documento de referencia
            'ENVIOSUNAT' => 'nullable|boolean', // Envío a SUNAT (0 = no, 1 = sí)
            'FECHAENVIO' => 'nullable|date', // Fecha de envío a SUNAT
            'TIPODOCREFERENCIA' => 'nullable|string|max:2', // Tipo de documento de referencia
            'CONREFERENCIA' => 'nullable|boolean', // Con referencia (0 = no, 1 = sí)
            'CODIGOTRASLADO' => 'nullable|string|max:3', // Código de traslado
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

        $guia = new GuiaRemision();
        $guia->SERIEDOC = $request->input('SERIEDOC');
        $guia->NUMERODOC = $request->input('NUMERODOC');
        $guia->FECHATRASLADO = $request->input('FECHATRASLADO');
        $guia->PUNTOPARTIDA = $request->input('PUNTOPARTIDA');
        $guia->PUNTOLLEGADA = $request->input('PUNTOLLEGADA');
        $guia->RAZONSOCIALDESTINATARIO = $request->input('RAZONSOCIALDESTINATARIO');
        $guia->RUC = $request->input('RUC');
        $guia->PLACA = $request->input('PLACA');
        $guia->MARCA = $request->input('MARCA');
        $guia->CERTINSCRIPCION = $request->input('CERTINSCRIPCION');
        $guia->LICENCIACONDUCIR = $request->input('LICENCIACONDUCIR');
        $guia->TIPODOCPAGO = $request->input('TIPODOCPAGO');
        $guia->NROCOMPROBANTEPAGO = $request->input('NROCOMPROBANTEPAGO');
        $guia->MOTIVOTRASLADO = $request->input('MOTIVOTRASLADO');
        $guia->RUCTRANSPORTE = $request->input('RUCTRANSPORTE');
        $guia->TIPOGUIA = $request->input('TIPOGUIA');
        $guia->PESOTOTAL = $request->input('PESOTOTAL');
        $guia->DOCREFERENCIA = $request->input('DOCREFERENCIA');
        $guia->ENVIOSUNAT = $request->input('ENVIOSUNAT');
        $guia->FECHAENVIO = $request->input('FECHAENVIO');
        $guia->TIPODOCREFERENCIA = $request->input('TIPODOCREFERENCIA');
        $guia->CONREFERENCIA = $request->input('CONREFERENCIA');
        $guia->CODIGOTRASLADO = $request->input('CODIGOTRASLADO');
        $guia->TRASBORDOPROGRAMADO = $request->input('TRASBORDOPROGRAMADO');
        $guia->UNIDADPESO = $request->input('UNIDADPESO');
        $guia->TOTALPAQUETES = $request->input('TOTALPAQUETES');
        $guia->TRANSPORTMODECODE = $request->input('TRANSPORTMODECODE');
        $guia->DNIS = $request->input('DNIS');
        $guia->UBIGEOORIGEN = $request->input('UBIGEOORIGEN');
        $guia->UBIGEODESTINO = $request->input('UBIGEODESTINO');
        $guia->CONTENEDOR = $request->input('CONTENEDOR');
        $guia->AEREOPUERTO = $request->input('AEREOPUERTO');
        $guia->NOTE = $request->input('NOTE');
        $guia->NROPEDIDO = $request->input('NROPEDIDO');
        $guia->ORDENCOMPRA = $request->input('ORDENCOMPRA');
        $guia->SCOP = $request->input('SCOP');
        $guia->CODIGOPAGO = $request->input('CODIGOPAGO');
        $guia->save();


        return redirect()->route('guias.create')->with('success', 'Guía creada exitosamente.');
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
