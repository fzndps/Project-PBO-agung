<nav class="bg-indigo-900 p-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">
        </div>
        <div class="text-white">
            <span class="mr-4"><?= $_SESSION['user']['name'] ?? 'Guest'; ?></span>
            <span class="mr-4"><?= $_SESSION['user']['role'] ?? 'Unknown'; ?></span>
            <a href="index.php?modul=auth&action=logout" class="bg-red-600 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </a>
        </div>
    </div>
</nav>
