<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- para mostrar que el mensaje se ha guardado -->
        @if(session('success'))
        <div class="bg-green-100border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="flex align-middle py-4 space-x-3 flex-grow bg-100  ">

            <form action="{{ route('guiaremision.store') }}" method="POST" class="space-y-6 w-full bg-white p-4 rounded">
                @csrf
                <div>
                    <h2 class="text-center text-3xl font-sans">Formulario de Guía de Remisión</h2>
                </div>

                <div class="grid grid-rows-2 gap-6">
                    {{-- Campos principales --}}
                    <div class="grid grid-cols-2 gap-6 space-y-4">
                        <label class="gap-2 space-x-20 rounded-md mb-auto" for="SERIEDOC">Serie Documento *</label>
                        <input type="text" name="SERIEDOC" value="F001" maxlength="8" required class="w-4/5 px-3 py-2 rounded-md">


                        <label class="gap-2 space-x-2" for="NUMERODOC">Número Documento *</label>
                        <input type="number" name="NUMERODOC" value="1001" required class="w-1/2 px-1 py-2 rounded-md">

                        <label class="gap-2 space-x-20 rounded-md mb-auto" for="FECHAEMISION">Fecha Emisión *</label>
                        <input type="date" name="FECHAEMISION" value="{{ date('Y-m-d') }}" required class="w-1/2 px-3 py-2 rounded-md">

                        <label class="gap-2 space-x-20 rounded-md mb-auto" for="FECHATRASLADO">Fecha Traslado</label>
                        <input type="date" name="FECHATRASLADO" value="{{ date('Y-m-d', strtotime('+1 day')) }}" class="w-1/2 px-3 py-2 rounded-md">

                        <label class="gap-2 space-x-20 rounded-md mb-auto" for="PUNTOPARTIDA">Punto Partida *</label>
                        <input type="text" name="PUNTOPARTIDA" value="Av. Los Libertadores 123" maxlength="255" required class="">

                        <label class="" for="PUNTOLLEGADA">Punto Llegada *</label>
                        <input type="text" name="PUNTOLLEGADA" value="Jr. Las Camelias 456" maxlength="255" required class="w-1/2 px-3 py-2 rounded-md">
                    </div>
                    <div class="grid grid-cols-2 gap-6 space-y-4">
                        {{-- Datos Destinatario --}}
                        <label class="" for="RAZONSOCIALDESTINATARIO">Razón Social Destinatario *</label>
                        <input type="text" name="RAZONSOCIALDESTINATARIO" value="Transportes SAC" maxlength="255" required class="w-1/2 px-3 py-2 rounded-md">

                        <label class="" for="RUC">RUC *</label>
                        <input type="text" name="RUC" value="20123456789" pattern="\d{11}" required class="w-1/2 px-3 py-2 rounded-md">
                    </div>
                    <div class="grid grid-cols-2 gap-6 space-y-4">
                        {{-- Datos Transporte --}}
                        <label class="" for="PLACA">Placa Vehículo</label>
                        <input type="text" name="PLACA" value="ABC-123" maxlength="128" class="">

                        <label class="" for="MARCA">Marca Vehículo</label>
                        <input type="text" name="MARCA" value="Toyota" maxlength="64" class="">

                        <label class="" for="MOTIVOTRASLADO">Motivo Traslado *</label>
                        <input type="text" name="MOTIVOTRASLADO" value="Venta de mercadería" maxlength="128" required class="">

                        <label class="" for="PESOTOTAL">Peso Total *</label>
                        <input type="number" name="PESOTOTAL" value="1500.50" step="0.01" required class="">

                        <label class="" for="UNIDADPESO">Unidad Peso *</label>
                        <input type="text" name="UNIDADPESO" value="KGM" maxlength="4" required class="">

                        <label class="" for="TOTALPAQUETES">Total de Paquetees</label>
                        <input type="text" name="TOTALPAQUETES" value="10" maxlength="4" required class="">

                        <label for="DOCREFERENCIA" class="">Documentos de Referencia</label>
                        <input type="text" name="DOCREFERENCIA" value="DOC123" class="">

                        <label for="ENVIOSUNAT" class="">Enviados a SUNAT</label>
                        <input type="text" name="ENVIOSUNAT" value="0" class="">
                    </div>

                    {{-- Campos Adicionales --}}
                    <div class="grid grid-cols-2 gap-6 space-y-4">
                        <hr>
                        <label class="" for="RAZONSOCIALTRANSPORTE">Razón Social Transporte</label>
                        <input type="text" name="RAZONSOCIALTRANSPORTE" value="Logística Express S.A." maxlength="255" class="">

                        <label class="" for="RUCTRANSPORTE">RUC Transporte</label>
                        <input type="text" name="RUCTRANSPORTE" value="20987654321" pattern="\d{11}" class="">

                        <label class="" for="NOTE">Notas Adicionales</label>
                        <textarea name="NOTE" maxlength="128" class="">Entrega urgente</textarea>
                    </div>

                    {{-- Campos Opcionales --}}
                    <div class="grid grid-cols-2 gap-6 space-y-4">
                        <label class="" for="TIPODOCPAGO">Tipo Documento Pago</label>
                        <input type="text" name="TIPODOCPAGO" value="FACT" maxlength="16" class="">

                        <label class="" for="NROCOMPROBANTEPAGO">Número Comprobante Pago</label>
                        <input type="text" name="NROCOMPROBANTEPAGO" value="001-00001234" maxlength="16" class="">

                        <label class="" for="NROPEDIDO">Número Pedido</label>
                        <input type="text" name="NROPEDIDO" value="PED-2024-001" maxlength="64" class="">

                        <label class="" for="UBIGEOORIGEN">Ubigeo Origen</label>
                        <input type="text" name="UBIGEOORIGEN" value="150101" maxlength="8" class="">
                    </div>

                    <div class="flex items-center justify-between py-4">
                        <button type="submit" style="background-color: #38A169;
                            color: white;
                            border: none;
                            padding: 10px 20px;
                            font-size: 16px;
                            font-weight: bold;
                            border-radius: 5px;
                            cursor: pointer;
                            transition: background-color 0.3s ease, transform 0.2s ease;
                            margin: auto;">
                            
                            Crear
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>