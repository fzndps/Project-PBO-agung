<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
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
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                        <a href="index.php?modul=dataBarang&fitur=addBarang">Insert New Barang</a>
                    </button>
                </div>

                <!-- Roles Table -->
                <div class="bg-white my-6 rounded-lg  shadow-lg">
                    <table class="min-w-full bg-white grid-cols-1">
                        <thead class="bg-gray-800 text-white">

                            <tr>
                                <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">ID Barang</th>
                                <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Nama barang</th>
                                <th class="w-1/3 py-3 px-4 uppercase font-semibold text-sm">Harga Barang</th>
                                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Jumlah Barang</th>
                                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>

                        </thead>
                        <tbody class="text-gray-700">
                            <!-- Static Data Rows -->
                            <?php foreach ($barangs as $barang) { ?>
                                <tr class="text-center border-b border-gray-200 pb-1">
                                    <td class="py-3 px-4 text-blue-600 "><?php echo htmlspecialchars($barang->idBarang); ?></td>
                                    <td class="w-1/4 py-3 px-4"><?php echo htmlspecialchars($barang->namaBarang); ?></td>
                                    <td class="w-1/3 py-3 px-4"><?php echo htmlspecialchars($barang->hargaBarang); ?></td>
                                    <td class="w-1/4 py-3 px-4"><?php echo htmlspecialchars($barang->totalBarang); ?></td>
                                    <td class="w-1/6 py-3 px-4 flex items-center">
                                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-4">
                                            <a href="index.php?modul=dataBarang&fitur=editBarang&id=<?php echo htmlspecialchars($barang->idBarang); ?>">Update</a>
                                        </button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                            <a href="index.php?modul=dataBarang&fitur=delete&id=<?php echo htmlspecialchars($barang->idBarang); ?>">Delete</a>
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                            <!-- More rows can be added statically here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>