<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - SPEEDZONE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">

  <div class="bg-yellow-200 p-8 rounded-2xl shadow-xl w-full max-w-sm">
    <div class="mb-8 text-center">
      <div class="bg-white text-black font-semibold text-xl py-2 rounded shadow">
        SPEEDZONE
      </div>
    </div>

    <form action="#" method="POST" class="space-y-6">
      <div>
        <label class="block text-black font-medium mb-1" for="username">Nama Pengguna :</label>
        <input type="text" id="username" name="username"
          class="w-full px-4 py-2 border border-yellow-400 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" />
      </div>

      <div>
        <label class="block text-black font-medium mb-1" for="password">Kata Sandi :</label>
        <input type="password" id="password" name="password"
          class="w-full px-4 py-2 border border-yellow-400 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" />
      </div>

      <div class="text-right">
        <button type="submit"
          class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600 transition duration-200">
          Daftar
        </button>
      </div>
    </form>
  </div>

</body>
</html>
