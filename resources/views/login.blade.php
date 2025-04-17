<!DOCTYPE html>
<<<<<<< HEAD
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
        Raid
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

=======
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Login</button>
    </form>
>>>>>>> 3c39dd28e9fd9e27973d7b37ad9f5909c5d6235d
</body>
</html>
