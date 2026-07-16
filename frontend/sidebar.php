<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- sidebar.php -->

<aside class="w-64 h-screen bg-white border-r flex flex-col justify-between p-5">

    <div>

        <!-- LOGO -->
        <div class="flex justify-center -mb-20 -mt-20">
            <img 
                src="../assets/logo_dietplan.png"
                class="w-60 h-60 object-contain p-0"
            >
        </div>

        <!-- MENU -->
        <nav class="space-y-2">

            <!-- BERANDA -->
            <a href="dashboard.php"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition
            <?php echo ($currentPage == 'dashboard.php')
            ? 'bg-[#A6C187] text-white font-medium'
            : 'text-gray-600 hover:bg-[#A6C187] hover:text-white'; ?>">
                <i class="bi bi-grid"></i>
                Beranda
            </a>

            <!-- PROFIL -->
            <a href="profil.php"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition
            <?php echo ($currentPage == 'profil.php')
            ? 'bg-[#A6C187] text-white font-medium'
            : 'text-gray-600 hover:bg-[#A6C187] hover:text-white'; ?>">
                <i class="bi bi-person"></i>
                Profil
            </a>

            <!-- JADWAL -->
            <a href="jadwal.php"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition
            <?php echo ($currentPage == 'jadwal.php')
            ? 'bg-[#A6C187] text-white font-medium'
            : 'text-gray-600 hover:bg-[#A6C187] hover:text-white'; ?>">
                <i class="bi bi-calendar-event"></i>
                Jadwal
            </a>

            <!-- TARGET -->
            <a href="target_page.php"
            class="flex items-center gap-3 px-4 py-3 rounded-xl transition
            <?php echo ($currentPage == 'target_page.php')
            ? 'bg-[#A6C187] text-white font-medium'
            : 'text-gray-600 hover:bg-[#A6C187] hover:text-white'; ?>">
                <i class="bi bi-bullseye"></i>
                Target
            </a>

        </nav>
    </div>

    <!-- LOGOUT -->
    <a href="logout.php">
        <button class="w-full flex items-center justify-center gap-2 border border-gray-300 py-3 rounded-xl text-gray-600 hover:bg-gray-100 transition">
            <i class="bi bi-box-arrow-right"></i>
            Keluar
        </button>
    </a>

</aside>