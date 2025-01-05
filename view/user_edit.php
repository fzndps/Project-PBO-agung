<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

  <!-- Navbar -->
  <?php include 'include/navbar.php'; ?>
  
  <!-- Main container -->
  <div class="flex">
    <!-- Sidebar -->
    <?php include 'include/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-1 p-8">
      <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit User</h2>
        <form action="index.php?modul=dataUser&fitur=updateUser&id=<?php echo htmlspecialchars($user->idUser)?>" method="POST">
        <input type="hidden" name="idUser" value="<?php echo $user->idUser?>">
          <!-- Username -->
          <div class="mb-4">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
            <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Username" required value="<?php echo htmlspecialchars($user->username); ?>">
          </div>

          <!-- Password -->
          <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
            <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Password" required value="<?php echo htmlspecialchars($user->password); ?>">
          </div>

          <!-- Role -->
          <div class="mb-4">
            <label for="role_name" class="block text-gray-700 text-sm font-bold mb-2">Role Name:</label>
            <select id="role_name" name="role_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
              <?php foreach ($roles as $role): ?>
                <option value="<?php echo htmlspecialchars($role->role_name); ?>" <?php echo $role->role_name === $user->role->role_name ? 'selected' : ''; ?>>
                  <?php echo htmlspecialchars($role->role_name); ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- Submit Button -->
          <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              Update
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
