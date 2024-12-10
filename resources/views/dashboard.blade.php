<x-app-layout>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-center mb-6">{{ __("Welcome to your Dashboard!") }}</h1>

                    <!-- Row for cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <h2 class="text-xl font-semibold text-gray-800">Total Users</h2>
                            <p class="text-2xl font-bold text-blue-600">2,340</p>
                            <p class="text-sm text-gray-500 mt-2">Total registered users in the system.</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <h2 class="text-xl font-semibold text-gray-800">Sales</h2>
                            <p class="text-2xl font-bold text-green-600">$15,430</p>
                            <p class="text-sm text-gray-500 mt-2">Total sales made today.</p>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                            <h2 class="text-xl font-semibold text-gray-800">Tasks Completed</h2>
                            <p class="text-2xl font-bold text-purple-600">185</p>
                            <p class="text-sm text-gray-500 mt-2">Tasks completed today.</p>
                        </div>
                    </div>

                    <!-- Chart Section (Example) -->
                    <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Sales Overview</h2>
                        <div id="chart" class="h-64 bg-gray-200 rounded-lg">
                            <!-- You can integrate a chart here using Chart.js or another library -->
                            <p class="text-center text-gray-500 mt-24">Chart would go here</p>
                        </div>
                    </div>

                    <!-- Buttons for interaction -->
                    <div class="mt-6 text-center">
                        <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                            View Reports
                        </button>
                        <button class="ml-4 bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition duration-300">
                            Manage Users
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>