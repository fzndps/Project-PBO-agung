<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
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
            <!-- Your main content goes here -->
            <div class="container mx-auto">
                <!-- Button to Insert New Role -->
                <div class="mb-4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <a href="index.php?modul=dataUser&fitur=addUser">Insert New User</a>
                    </button>
                </div>

                <!-- Roles Table -->
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-full bg-white grid-cols-1">
                        <thead class="bg-gray-800 text-white">

                            <tr>
                                <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">ID user</th>
                                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Username</th>
                                <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm">Password</th>
                                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Role Name</th>
                                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>

                        </thead>
                        <tbody class="text-gray-700">
                            <!-- Static Data Rows -->
                            <?php if (!empty($users)) {
                                foreach ($users as $user) { ?>
                                    <tr class="text-center border-b border-gray-200 pb-1">
                                        <td class="py-3 px-4 text-blue-600"><?php echo htmlspecialchars($user->idUser); ?></td>
                                        <td class="w-1/4 py-3 px-4"><?php echo htmlspecialchars($user->username); ?></td>
                                        <td class="w-1/3 py-3 px-4">
                                            <?php if (isset($_GET['viewPassword']) && $_GET['viewPassword'] == $user->idUser): ?>
                                                <?php echo htmlspecialchars($user->password); ?>
                                            <?php else: ?>
                                                <a href="index.php?modul=dataUser&viewPassword=<?php echo htmlspecialchars($user->idUser); ?>"
                                                    class="text-blue-600 underline">Lihat</a>
                                            <?php endif; ?>
                                        </td>
                                        <td class="w-1/6 py-3 px-4"><?php echo $user->role->role_name; ?></td>
                                        <td class="w-1/6 py-3 px-4">
                                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2">
                                                <a href="index.php?modul=dataUser&fitur=editUser&id=<?php echo htmlspecialchars($user->idUser); ?>">Update</a>
                                            </button>
                                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded mr-2">
                                                <a href="index.php?modul=dataUser&fitur=deleteUser&id=<?php echo htmlspecialchars($user->idUser); ?>">Delete</a>
                                            </button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } ?>
                            <!-- More rows can be added statically here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>