<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="/styles/tailwindcss3.4.1.js"></script>
</head>
<body class="bg-yellow-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-blue-800">Dashboard!</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow-lg rounded-xl p-6 text-center">
                <h2 class="text-xl font-semibold text-black-700">Produk</h2>
                <p class="text-3xl text-blue-600 mt-2">{{ $userCount }}</p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 text-center">
                <h2 class="text-xl font-semibold text-black-700">Warna</h2>
                <p class="text-3xl text-yellow-500 mt-2">{{ $warna }}</p>
            </div>
            <div class="bg-white shadow-lg rounded-xl p-6 text-center">
                <h2 class="text-xl font-semibold text-black-700">Stok</h2>
                <p class="text-3xl text-purple-600 mt-2">{{ $stok }}</p>
            </div>
        </div>
    </div>
</body>
</html>
