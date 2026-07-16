<?php
session_start();
?>

<script>
// Cek apakah user sudah login
const user = localStorage.getItem("user");

if (!user) {
    alert("Silakan login terlebih dahulu.");
    window.location.href = "../index.php";
}
</script>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Berhasil Dibuat</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="bg-[#f3f3f3] h-screen overflow-hidden flex items-center justify-center">


    <div class="w-[95%] h-[95vh] bg-[#f7f7f7] px-8 py-5 overflow-hidden">

        <!-- Logo -->
        <div class="flex items-center gap-2 text-[#A6C187]">
          
        </div>

        <!-- Content -->
        <div class="flex flex-col items-center justify-center h-full -mt-6">

            <!-- Success Icon -->
            <div class="relative mb-4 fade-up">

                <div class="w-28 h-28 rounded-full border-[3px] border-[#A6C187] flex items-center justify-center pulse-ring">
                    <div class="w-20 h-20 rounded-full border-[2px] border-[#A6C187] flex items-center justify-center pulse-ring">
                        <div class="w-14 h-14 rounded-full bg-[#A6C187] flex items-center justify-center pulse-ring ">
                            <i class="bi bi-check-lg text-white text-3xl"></i>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Text -->
            <h1 class="text-2xl font-semibold text-gray-800 fade-up">
                Akun berhasil dibuat!
            </h1>

            <p class="text-gray-500 mt-1 text-sm fade-up">
                Terimakasih sudah bergabung di DietPlan.
            </p>

            <!-- Feature Box -->
            <div class="bg-[#fafafa] border border-gray-200 shadow-md rounded-[25px] mt-6 w-full max-w-3xl px-6 py-5 fade-up">

                <h2 class="text-center text-[#4B8A59] font-semibold text-lg mb-5 fade-up">
                    Apa yang bisa kamu lakukan?
                </h2>

                <div class="grid grid-cols-4 text-center fade-up">

                    <!-- Item -->
                    <div class="flex flex-col items-center px-3">
                        <i class="bi bi-calendar-check text-[#4B8A59] text-4xl mb-2"></i>
                        <p class="text-gray-700 text-[12px] leading-4">
                            Atur jadwal <br> makan sehat
                        </p>
                    </div>

                    <div class="flex flex-col items-center border-l border-gray-300 px-3">
                        <i class="bi bi-egg-fried text-[#4B8A59] text-4xl mb-2"></i>
                        <p class="text-gray-700 text-[12px] leading-4">
                            Pantau asupan <br> harian
                        </p>
                    </div>

                    <div class="flex flex-col items-center border-l border-gray-300 px-3">
                        <i class="bi bi-speedometer2 text-[#4B8A59] text-4xl mb-2"></i>
                        <p class="text-gray-700 text-[12px] leading-4">
                            Lacak berat <br> badan
                        </p>
                    </div>

                    <div class="flex flex-col items-center border-l border-gray-300 px-3">
                        <i class="bi bi-bar-chart-line text-[#4B8A59] text-4xl mb-2"></i>
                        <p class="text-gray-700 text-[12px] leading-4">
                            Lihat progres <br> dan target
                        </p>
                    </div>

                </div>
            </div>

            <!-- Buttons -->
            <div class="mt-6 flex flex-col gap-3 w-full max-w-sm fade-up">

                <a href="dashboard.php"class="bg-[#A6C187] hover:bg-[#a9bf88] transition shadow text-white font-semibold py-3 rounded-xl text-sm flex items-center justify-center gap-2">
                    <button >
                        Mulai Sekarang
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </a>

                <a href="profil.php" class="bg-white border border-gray-200 hover:bg-gray-50 transition shadow text-[#A6C187] font-medium py-3 rounded-xl text-sm flex items-center justify-center gap-2">
                    <button >
                        Lengkapi data diri
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </a>

            </div>

        </div>

    </div>

</body>
</html>