<x-app-layout>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-500 dark:text-gray-200">
                    <h3 class="text-3xl text-center font-bold mb-8 ">Lista de usuarios</h3>
                    <table class="min-w-full table-auto border-collapse border border-gray-300">
                        <thead>
                            <tr style="background-color: #0056D2;color:white">
                                <th class="border border-gray-300 px-4 py-2 text-center">Nombre</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Correo</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Creado hace</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Fecha de registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user->created_at->diffForHumans() }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $user->created_at->format('d/m/Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>