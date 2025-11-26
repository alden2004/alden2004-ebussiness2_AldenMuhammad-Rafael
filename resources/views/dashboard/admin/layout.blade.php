<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-blue-700 text-white min-h-screen p-6 space-y-4">

            <h1 class="text-2xl font-bold mb-8">Admin Panel</h1>

            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" 
                   class="block p-2 rounded hover:bg-blue-600">
                   Dashboard
                </a>

                <a href="{{ route('products.index') }}" 
                   class="block p-2 rounded hover:bg-blue-600">
                   Produk
                </a>

                <a href="{{ route('admin.orders') }}" 
                   class="block p-2 rounded hover:bg-blue-600">
                   Pesanan
                </a>

                <a href="{{ route('admin.users') }}" 
                   class="block p-2 rounded hover:bg-blue-600">
                   Pengguna
                </a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="w-full text-left p-2 rounded hover:bg-red-600 bg-red-500 mt-5">
                        Logout
                    </button>
                </form>
            </nav>

        </aside>

        <!-- Content -->
        <main class="flex-1 p-10">
            @yield('content')
        </main>

    </div>

</body>
</html>
