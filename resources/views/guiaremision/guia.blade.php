<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Guía de Remisión') }}
            </h2>
        </x-slot>

    </div>
    <div class="container mt-5 justify-center bg-black text-black ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('guiaremision.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="DUAL" class="form-label">DUAL</label>
                <input type="text" name="DUAL" id="DUAL" class="form-control" value="{{ old('DUAL', '1') }}" required>
            </div>
            <div class="mb-3">
                <label for="SERIEDOC" class="form-label">Serie del Documento</label>
                <input type="text" name="SERIEDOC" id="SERIEDOC" class="form-control" value="{{ old('SERIEDOC', 'A123') }}" required>
            </div>

            <div class="mb-3">
                <label for="NUMERODOC" class="form-label">Número de Documento</label>
                <input type="number" name="NUMERODOC" id="NUMERODOC" class="form-control" value="{{ old('NUMERODOC', '7226378') }}" required>
            </div>

            <div class="mb-3">
                <label for="FECHAEMISION" class="form-label">Fecha de Emisión</label>
                <input type="date" name="FECHAEMISION" id="FECHAEMISION" class="form-control" value="{{ old('FECHAEMISION') }}" required>
            </div>

            <div class="mb-3">
                <label for="FECHATRASLADO" class="form-label">Fecha de Traslado</label>
                <input type="date" name="FECHATRASLADO" id="FECHATRASLADO" class="form-control" value="{{ old('FECHATRASLADO', '2024-12-03') }}">
            </div>

            <div class="mb-3">
                <label for="PUNTOPARTIDA" class="form-label">Punto de Partida</label>
                <input type="text" name="PUNTOPARTIDA" id="PUNTOPARTIDA" class="form-control" value="{{ old('PUNTOPARTIDA', 'Av. El Parque 123, Ciudad X') }}" required>
            </div>

            <div class="mb-3">
                <label for="PUNTOLLEGADA" class="form-label">Punto de Llegada</label>
                <input type="text" name="PUNTOLLEGADA" id="PUNTOLLEGADA" class="form-control" value="{{ old('PUNTOLLEGADA', 'Calle 45, Zona Industrial, Ciudad Y') }}" required>
            </div>

            <div class="mb-3">
                <label for="RAZONSOCIALDESTINATARIO" class="form-label">Razón Social del Destinatario</label>
                <input type="text" name="RAZONSOCIALDESTINATARIO" id="RAZONSOCIALDESTINATARIO" class="form-control" value="{{ old('RAZONSOCIALDESTINATARIO', 'Comercializadora XYZ S.A.C.') }}" required>
            </div>

            <div class="mb-3">
                <label for="RUC" class="form-label">RUC</label>
                <input type="text" name="RUC" id="RUC" class="form-control" value="{{ old('RUC', '12345678901') }}" required>
            </div>

            <div class="mb-3">
                <label for="PLACA" class="form-label">Placa</label>
                <input type="text" name="PLACA" id="PLACA" class="form-control" value="{{ old('PLACA', 'ABC123') }}" required>
            </div>

            <div class="mb-3">
                <label for="MARCA" class="form-label">Marca</label>
                <input type="text" name="MARCA" id="MARCA" class="form-control" value="{{ old('MARCA', 'Toyota') }}" required>
            </div>

            <div class="mb-3">
                <label for="CERTINSCRIPCION" class="form-label">Certificado de Inscripción</label>
                <input type="text" name="CERTINSCRIPCION" id="CERTINSCRIPCION" class="form-control" value="{{ old('CERTINSCRIPCION', '12345ABC') }}" required>
            </div>

            <div class="mb-3">
                <label for="LICENCIACONDUCIR" class="form-label">Licencia de Conducir</label>
                <input type="text" name="LICENCIACONDUCIR" id="LICENCIACONDUCIR" class="form-control" value="{{ old('LICENCIACONDUCIR', 'ABC12345') }}" required>
            </div>

            <div class="mb-3">
                <label for="TIPODOCPAGO" class="form-label">Tipo de Documento de Pago</label>
                <input type="text" name="TIPODOCPAGO" id="TIPODOCPAGO" class="form-control" value="{{ old('TIPODOCPAGO', 'Factura') }}" required>
            </div>

            <div class="mb-3">
                <label for="NROCOMPROBANTEPAGO" class="form-label">Número de Comprobante de Pago</label>
                <input type="text" name="NROCOMPROBANTEPAGO" id="NROCOMPROBANTEPAGO" class="form-control" value="{{ old('NROCOMPROBANTEPAGO', '001-001-00012345') }}" required>
            </div>

            <div class="mb-3">
                <label for="MOTIVOTRASLADO" class="form-label">Motivo del Traslado</label>
                <input type="text" name="MOTIVOTRASLADO" id="MOTIVOTRASLADO" class="form-control" value="{{ old('MOTIVOTRASLADO', 'Venta de mercancías') }}" required>
            </div>

            <div class="mb-3">
                <label for="RUCTRANSPORTE" class="form-label">RUC del Transporte</label>
                <input type="text" name="RUCTRANSPORTE" id="RUCTRANSPORTE" class="form-control" value="{{ old('RUCTRANSPORTE', '98765432100') }}" required>
            </div>

            <div class="mb-3">
                <label for="TIPOGUIA" class="form-label">Tipo de Guía</label>
                <input type="text" name="TIPOGUIA" id="TIPOGUIA" class="form-control" value="{{ old('TIPOGUIA', 'Remisión') }}" required>
            </div>

            <div class="mb-3">
                <label for="PESOTOTAL" class="form-label">Peso Total (kg)</label>
                <input type="number" step="0.01" name="PESOTOTAL" id="PESOTOTAL" class="form-control" value="{{ old('PESOTOTAL', '878.6') }}" required>
            </div>

            <div class="mb-3">
                <label for="DOCREFERENCIA" class="form-label">Documento de Referencia</label>
                <input type="text" name="DOCREFERENCIA" id="DOCREFERENCIA" class="form-control" value="{{ old('DOCREFERENCIA', '000000') }}" required>
            </div>

            <div class="mb-3">
                <label for="ENVIOSUNAT" class="form-label">Enviado a SUNAT</label>
                <input type="number" name="ENVIOSUNAT" id="ENVIOSUNAT" class="form-control" value="{{ old('ENVIOSUNAT', '1') }}" required>
            </div>

            <div class="mb-3">
                <label for="FECHAENVIO" class="form-label">Fecha de Envío</label>
                <input type="date" name="FECHAENVIO" id="FECHAENVIO" class="form-control" value="{{ old('FECHAENVIO', '2024-12-03') }}">
            </div>

            <div class="mb-3">
                <label for="TIPODOCREFERENCIA" class="form-label">Tipo de Documento de Referencia</label>
                <input type="text" name="TIPODOCREFERENCIA" id="TIPODOCREFERENCIA" class="form-control" value="{{ old('TIPODOCREFERENCIA', 'Ninguno') }}">
            </div>

            <div class="mb-3">
                <label for="CONREFERENCIA" class="form-label">Con Referencia</label>
                <input type="text" name="CONREFERENCIA" id="CONREFERENCIA" class="form-control" value="{{ old('CONREFERENCIA', 'No') }}">
            </div>

            <div class="mb-3">
                <label for="CODIGOTRASLADO" class="form-label">Código de Traslado</label>
                <input type="text" name="CODIGOTRASLADO" id="CODIGOTRASLADO" class="form-control" value="{{ old('CODIGOTRASLADO', '001') }}">
            </div>

            <div class="mb-3">
                <label for="TRASBORDOPROGRAMADO" class="form-label">Trasbordo Programado</label>
                <input type="text" name="TRASBORDOPROGRAMADO" id="TRASBORDOPROGRAMADO" class="form-control" value="{{ old('TRASBORDOPROGRAMADO', 'No') }}">
            </div>

            <div class="mb-3">
                <label for="UNIDADPESO" class="form-label">Unidad de Peso</label>
                <select name="UNIDADPESO" id="UNIDADPESO" class="form-select" required>
                    <option value="KGM" {{ old('UNIDADPESO', 'KGM') == 'KGM' ? 'selected' : '' }}>Kilogramos (KGM)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="TOTALPAQUETES" class="form-label">Total de Paquetes</label>
                <input type="number" name="TOTALPAQUETES" id="TOTALPAQUETES" class="form-control" value="{{ old('TOTALPAQUETES', '5') }}" required>
            </div>

            <div class="mb-3">
                <label for="TRANSPORTMODECODE" class="form-label">Código de Modo de Transporte</label>
                <input type="text" name="TRANSPORTMODECODE" id="TRANSPORTMODECODE" class="form-control" value="{{ old('TRANSPORTMODECODE', '01') }}">
            </div>

            <div class="mb-3">
                <label for="DNIS" class="form-label">DNI del Conductor</label>
                <input type="text" name="DNIS" id="DNIS" class="form-control" value="{{ old('DNIS', '12345678') }}">
            </div>

            <div class="mb-3">
                <label for="UBIGEOORIGEN" class="form-label">Ubigeo de Origen</label>
                <input type="text" name="UBIGEOORIGEN" id="UBIGEOORIGEN" class="form-control" value="{{ old('UBIGEOORIGEN', '150101') }}">
            </div>

            <div class="mb-3">
                <label for="UBIGEOFIRMA" class="form-label">Ubigeo de Firma</label>
                <input type="text" name="UBIGEOFIRMA" id="UBIGEOFIRMA" class="form-control" value="{{ old('UBIGEOFIRMA', '150101') }}">
            </div>

            <div class="mb-3">
                <label for="ACTIVOS" class="form-label">Activo</label>
                <input type="text" name="ACTIVOS" id="ACTIVOS" class="form-control" value="{{ old('ACTIVOS', '1') }}">
            </div>

            <button type="submit" class="btn btn-primary bg-blue-500 text-black  rounded w-full">Guardar Guía de Remisión</button>
        </form>
    </div>
</x-app-layout>