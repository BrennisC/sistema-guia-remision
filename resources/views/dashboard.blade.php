<x-app-layout>

    <div class="py-8 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <!-- Row for cards -->
                    <div class="grid grid-cols-1 grid-row  md:grid-cols-3 lg:grid-cols-2 gap-8 p-8 space-y-4" style="max-width: 600px; margin: auto; margin-bottom: 20px;" >
                        <!-- Card 1 -->
                        <div class="bg-white p-6  rounded-lg shadow-lg hover:shadow-xl  transition duration-300">
                            <h2 class="text-xl font-semibold text-gray-800">Total de usuarios</h2>
                            <p class="text-2xl font-bold text-blue-600">25</p>
                            <p class="text-sm text-gray-500 mt-2">usuarios registrados en el sistema</p>
                        </div>

                        <!-- Card 2 -->
                        <div class=" p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300" style="background-color: #ffff;">
                            <h2 class="text-xl font-semibold text-black">Ventas</h2>
                            <p class="text-2xl font-bold text-green-600">$15,430</p>
                            <p class="text-sm text-gray-500 mt-2">Ventas totales realizadas hoy</p>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <h2 class="text-xl font-semibold text-gray-800">Tareas</h2>
                            <p class="text-2xl font-bold text-purple-600">185</p>
                            <p class="text-sm text-gray-500 mt-2">Tareas completadas hoy</p>
                        </div>

                    </div>



                    <!-- Buttons for interaction -->
                    <div class="mt-4 text-center">
                        <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                            Ver reportes
                        </button>
                        <button class="ml-4 bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition duration-300">
                            Administrar usuarios
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>