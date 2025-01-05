<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-950 flex items-center justify-center min-h-screen">

  <div class="bg-indigo-50 shadow-lg rounded-lg p-8 max-w-sm w-full">
    <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h1>
    
    <form action="index.php?modul=auth&action=login" method="POST">
      <!-- Username Input -->
      <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-neutral-900 mb-1">Username</label>
        <input type="text" id="username" name="username" required placeholder="Email"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>

      <!-- Password Input -->
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-neutral-900 mb-1">Password</label>
        <input type="password" id="password" name="password" required placeholder="Password"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 transition">
        Login
      </button>
    </form>

    <!-- Register Link -->
    <p class="text-center text-sm text-neutral-900 mt-4">
      Belum punya akun? 
      <a href="index.php?modul=auth&action=register" class="text-blue-500 hover:underline">Daftar di sini</a>.
    </p>
  </div>

</body>
</html>
