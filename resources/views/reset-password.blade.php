<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ubah Kata Sandi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-100 min-h-screen flex items-center justify-center">

  <div class="bg-yellow-200 p-8 rounded-2xl shadow-xl w-full max-w-sm">
    <div class="mb-8 text-center">
      <div class="bg-white text-black font-semibold text-xl py-2 rounded shadow">
        Ubah Kata Sandi
      </div>
    </div>

    <form action="{{ route('password.update') }}" method="POST" class="space-y-5">
      @csrf

      <div>
        <label for="current_password" class="block text-black mb-1">Masukkan Kata Sandi Lama :</label>
        <input type="password" id="current_password" name="current_password"
          class="w-full px-4 py-2 border border-yellow-400 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>

      <div>
        <label for="new_password" class="block text-black mb-1">Masukkan Kata Sandi Baru :</label>
        <input type="password" id="new_password" name="new_password"
          class="w-full px-4 py-2 border border-yellow-400 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>

      <div class="text-center pt-2">
        <button type="submit"
          class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600 transition duration-200">
          KONFIRMASI
        </button>
      </div>
    </form>
  </div>

</body>
</html>
