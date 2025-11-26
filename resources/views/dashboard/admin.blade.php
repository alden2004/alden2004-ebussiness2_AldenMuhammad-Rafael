<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Tailwind CDN (biar cepat dan mudah modif) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Wrapper -->
    <div class="flex">

        <!-- Sidebar -->
        <aside class="w-64 h-screen bg-[#1F1F27] text-white p-5">

            <h2 class="text-xl font-bold mb-8">Admin Panel</h2>

            <nav class="flex flex-col space-y-3">

                <a href="/admin/dashboard" 
                   class="py-2 px-3 rounded-lg hover:bg-[#4A89DC] transition">
                   Dashboard
                </a>

                <a href="/admin/products" 
                   class="py-2 px-3 rounded-lg hover:bg-[#4A89DC] transition">
                   Produk
                </a>

                <a href="/admin/orders" 
                   class="py-2 px-3 rounded-lg hover:bg-[#4A89DC] transition">
                   Pesanan
                </a>

                <a href="/admin/users" 
                   class="py-2 px-3 rounded-lg hover:bg-[#4A89DC] transition">
                   Pengguna
                </a>

                <a href="/logout" 
                   class="py-2 px-3 rounded-lg bg-red-500 hover:bg-red-600 transition">
                   Logout
                </a>

            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">

            <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Admin</h1>

            <!-- Card Container -->
            <div class="grid grid-cols-3 gap-6">

                <!-- CARD 1 -->
                <div class="bg-[#4A89DC] text-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold">Total Produk</h3>
                    <p class="text-3xl font-bold mt-2">120</p>
                </div>

                <!-- CARD 2 -->
                <div class="bg-green-500 text-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold">Total Pesanan</h3>
                    <p class="text-3xl font-bold mt-2">58</p>
                </div>

                <!-- CARD 3 -->
                <div class="bg-yellow-500 text-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-lg font-semibold">Total User</h3>
                    <p class="text-3xl font-bold mt-2">34</p>
                </div>

            </div>

        </main>

    </div>

</body>
</html>
