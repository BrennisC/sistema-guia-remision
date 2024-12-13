<x-app-layout>
    <div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Guía de Remisión') }}
            </h2>
        </x-slot>

    </div>
    <div class="container mt-5 justify-center bg-black text-black  flex-col">
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

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('guiaremision.store') }}" method="POST" class="bg-black text-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                {{-- Campos principales --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="DUAL">DUAL</label>
                    <input type="text" name="DUAL" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="SERIEDOC">Serie Documento *</label>
                    <input type="text" name="SERIEDOC" value="F001" maxlength="8" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="NUMERODOC">Número Documento *</label>
                    <input type="number" name="NUMERODOC" value="1001" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="FECHAEMISION">Fecha Emisión *</label>
                    <input type="date" name="FECHAEMISION" value="{{ date('Y-m-d') }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="FECHATRASLADO">Fecha Traslado</label>
                    <input type="date" name="FECHATRASLADO" value="{{ date('Y-m-d', strtotime('+1 day')) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="PUNTOPARTIDA">Punto Partida *</label>
                    <input type="text" name="PUNTOPARTIDA" value="Av. Los Libertadores 123" maxlength="255" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="PUNTOLLEGADA">Punto Llegada *</label>
                    <input type="text" name="PUNTOLLEGADA" value="Jr. Las Camelias 456" maxlength="255" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                {{-- Datos Destinatario --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="RAZONSOCIALDESTINATARIO">Razón Social Destinatario *</label>
                    <input type="text" name="RAZONSOCIALDESTINATARIO" value="Transportes SAC" maxlength="255" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="RUC">RUC *</label>
                    <input type="text" name="RUC" value="20123456789" pattern="\d{11}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                {{-- Datos Transporte --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="PLACA">Placa Vehículo</label>
                    <input type="text" name="PLACA" value="ABC-123" maxlength="128" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="MARCA">Marca Vehículo</label>
                    <input type="text" name="MARCA" value="Toyota" maxlength="64" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="MOTIVOTRASLADO">Motivo Traslado *</label>
                    <input type="text" name="MOTIVOTRASLADO" value="Venta de mercadería" maxlength="128" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="PESOTOTAL">Peso Total *</label>
                    <input type="number" name="PESOTOTAL" value="1500.50" step="0.01" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="UNIDADPESO">Unidad Peso *</label>
                    <input type="text" name="UNIDADPESO" value="KGM" maxlength="4" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="TOTALPAQUETES">Total de Paquetees</label>
                    <input type="text" name="TOTALPAQUETES" value="10" maxlength="4" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div>
                    <label for="DOCREFERENCIA" class="block text-gray-700 text-sm font-bold mb-2">Documentos de Referencia</label>
                    <input type="text" name="DOCREFERENCIA" value="DOC123" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div>
                    <label for="ENVIOSUNAT" class="block text-gray-700 text-sm font-bold mb-2">Enviados a SUNAT</label>
                    <input type="text" name="ENVIOSUNAT" value="0" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                {{-- Campos Adicionales --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="RAZONSOCIALTRANSPORTE">Razón Social Transporte</label>
                    <input type="text" name="RAZONSOCIALTRANSPORTE" value="Logística Express S.A." maxlength="255" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="RUCTRANSPORTE">RUC Transporte</label>
                    <input type="text" name="RUCTRANSPORTE" value="20987654321" pattern="\d{11}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="NOTE">Notas Adicionales</label>
                    <textarea name="NOTE" maxlength="128" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">Entrega urgente</textarea>
                </div>

                {{-- Campos Opcionales --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="TIPODOCPAGO">Tipo Documento Pago</label>
                    <input type="text" name="TIPODOCPAGO" value="FACT" maxlength="16" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="NROCOMPROBANTEPAGO">Número Comprobante Pago</label>
                    <input type="text" name="NROCOMPROBANTEPAGO" value="001-00001234" maxlength="16" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="NROPEDIDO">Número Pedido</label>
                    <input type="text" name="NROPEDIDO" value="PED-2024-001" maxlength="64" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="UBIGEOORIGEN">Ubigeo Origen</label>
                    <input type="text" name="UBIGEOORIGEN" value="150101" maxlength="8" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Crear Guía de Remisión
                </button>
            </div>
        </form>
</x-app-layout>