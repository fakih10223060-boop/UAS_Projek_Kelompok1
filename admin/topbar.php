<div class="flex justify-between items-center 
            bg-blue-800 
            px-8 py-4 shadow-md">

    <!-- LEFT -->
    <div class="flex items-center gap-4 text-white">
        <div class="w-10 h-10 flex items-center justify-center rounded-full 
                    bg-blue-600 font-bold">
            A
        </div>
        <div>
            <h2 class="text-lg font-semibold leading-tight">
                Dashboard Admin
            </h2>
            <p class="text-xs text-blue-200">
                Sistem Manajemen AKSI NYATA
            </p>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-6 text-white">
        <div class="text-right">
            <p class="text-xs text-blue-200">Login sebagai</p>
            <p class="text-sm font-semibold">
                <?= $_SESSION['admin']; ?>
            </p>
        </div>

        <a href="logout.php" class="inline-flex items-center gap-2 
                  bg-red-500 hover:bg-red-600 
                  px-4 py-2 rounded-lg 
                  text-sm font-medium transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
            </svg>
            Logout
        </a>
    </div>

</div>