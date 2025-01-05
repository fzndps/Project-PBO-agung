<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang edit</title>
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
            <!-- Formulir Input Role -->
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Update Barang</h2>
                <form action="index.php?modul=dataBarang&fitur=updateBarang&id=<?php echo htmlspecialchars($barang->idBarang); ?>" method="POST">
                <input type="hidden" name="idBarang" value="<?php echo htmlspecialchars($barang->idBarang); ?>">
                    <!-- Nama Role -->
                    <div class="mb-4">
                        <label for="namaBarang" class="block text-gray-700 text-sm font-bold mb-2">Nama Barang:</label>
                        <input type="text" id="namaBarang" name="namaBarang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama Barang" required
                            value="<?php echo htmlspecialchars($barang->namaBarang) ?>">
                    </div>

                    <!-- Role Deskripsi -->
                    <div class="mb-4">
                        <label for="hargaBarang" class="block text-gray-700 text-sm font-bold mb-2">Harga Barang:</label>
                        <input id="hargaBarang" name="hargaBarang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Harga Barang" required
                            value="<?php echo htmlspecialchars($barang->hargaBarang) ?>">
                    </div>

                    <div class="mb-4">
                        <label for="totalBarang" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Barang :</label>
                        <input type="number" id="totalBarang" name="totalBarang" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Total Barang" required value="<?php echo htmlspecialchars($barang->totalBarang) ?>">
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>