<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-bold mb-4">Nueva Guía de Remisión</h1>
        <form action="{{route('guia.store')}}" method=" POST">
            @csrf
            <!-- Cliente -->
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">1. Cliente</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Tipo Documento</label>
                        <select class="w-full border-gray-300 rounded-md shadow-sm" name="tipo_documento">
                            <option value="RUC">R.U.C.</option>
                            <option value="DNI">D.N.I.</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">N° Documento</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="numero_documento">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium">Nombre o Razón Social</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="razon_social">
                    </div>
                </div>
            </div>

            <!-- Datos de Traslado -->
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">2. Datos de Traslado</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Motivo del Traslado</label>
                        <select class="w-full border-gray-300 rounded-md shadow-sm" name="motivo_traslado">
                            <option value="establecimientos">Traslado entre establecimientos de la misma empresa</option>
                            <option value="venta">Venta</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Modalidad del Traslado</label>
                        <select class="w-full border-gray-300 rounded-md shadow-sm" name="modalidad_traslado">
                            <option value="privado">Transporte Privado</option>
                            <option value="publico">Transporte Público</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Tipo de Vehículo</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="tipo_vehiculo">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Fecha Inicial de Traslado</label>
                        <input type="date" class="w-full border-gray-300 rounded-md shadow-sm" name="fecha_traslado">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Peso Bruto (KG)</label>
                        <input type="number" class="w-full border-gray-300 rounded-md shadow-sm" name="peso_bruto">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Número de Bultos</label>
                        <input type="number" class="w-full border-gray-300 rounded-md shadow-sm" name="numero_bultos">
                    </div>
                </div>
            </div>

            <!-- Datos del Transporte -->
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">3. Datos del Transporte</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium">Tipo Documento</label>
                        <select class="w-full border-gray-300 rounded-md shadow-sm" name="tipo_documento_conductor">
                            <option value="dni">D.N.I.</option>
                            <option value="ruc">R.U.C.</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium">N° Documento</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="numero_documento_conductor">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Nombre Conductor</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="nombre_conductor">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Apellidos Conductor</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="apellidos_conductor">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">N° Placa Vehículo</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="placa_vehiculo">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Num. Brevete</label>
                        <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="num_brevete">
                    </div>
                </div>
            </div>

            <!-- Punto de Partida y Llegada -->
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">4. Punto de Partida</h2>
                <div>
                    <label class="block text-sm font-medium">Dirección</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="direccion_partida">
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium">Ubigeo</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="ubigeo_partida">
                </div>
            </div>

            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">5. Punto de Llegada</h2>
                <div>
                    <label class="block text-sm font-medium">Dirección</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="direccion_llegada">
                </div>
                <div class="mt-4">
                    <label class="block text-sm font-medium">Ubigeo</label>
                    <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="ubigeo_llegada">
                </div>
            </div>

            <!-- Documento de Referencia -->
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">7. Documento de Referencia</h2>
                <label class="block text-sm font-medium">Serie Correlativo</label>
                <input type="text" class="w-full border-gray-300 rounded-md shadow-sm" name="serie_correlativo">
            </div>

            <!-- Productos o Servicios -->
            <div class="mb-6">
                <h2 class="font-semibold text-lg mb-2">Productos o Servicios</h2>
                <textarea class="w-full border-gray-300 rounded-md shadow-sm" rows="3" name="productos_servicios"></textarea>
            </div>

            <!-- Botones -->
            <div class="flex justify-between">
                <button type="submit" class="bg-blue-500 text-black py-2 px-4 rounded-md hover:bg-blue-600">Enviar a SUNAT</button>
                <div class="space-x-2">
                    <button type="button" class="bg-green-500 text-black py-2 px-4 rounded-md hover:bg-green-600">Emitir Factura</button>
                    <button type="button" class="bg-yellow-500 text-black py-2 px-4 rounded-md hover:bg-yellow-600">Emitir Boleta</button>
                    <button type="button" class="bg-red-500 text-black py-2 px-4 rounded-md hover:bg-red-600">Nota de Venta</button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>