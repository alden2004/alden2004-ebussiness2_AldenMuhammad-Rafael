@extends('dashboard.admin.layout')

@section('content')

<h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Admin</h1>

<div class="grid grid-cols-3 gap-6">

    <!-- CARD 1 -->
    <div class="bg-blue-600 text-white p-6 rounded-xl shadow-lg">
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

@endsection
