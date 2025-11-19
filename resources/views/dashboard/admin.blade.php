<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold">Admin Dashboard</h1>
                <p class="mt-2">Hai Admin, {{ Auth::user()->name }}!</p>
                <p class="mt-1 text-sm text-gray-500">Ini adalah halaman khusus admin.</p>
            </div>
        </div>
    </div>
</x-app-layout>
