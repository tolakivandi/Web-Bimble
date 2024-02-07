<?php
require_once "./fungsi/function_absen.php";
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit;
}

if (isset($_POST["absen"])) {
    $absen = absen($_POST["id_siswa"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full overflow-x-hidden flex flex-col items-center bg-gradient-to-r from-sky-200 to-sky-300">
    <nav class="bg-cyan-600 text-white py-4 w-full">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <a href="" class="flex h-max items-center gap-3 font-semibold">
                <img src="images/logo-pens.png" alt="" class="w-16">
                PENS SUMENEP
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
                <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="index.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="absensi.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Absensi</a>
                    </li>
                    <li>
                        <a href="kelas.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Kelas</a>
                    </li>
                    <li>
                        <a href="jadwal.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Jadwal</a>
                    </li>
                    <li>
                        <a href="mapel.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Mapel</a>
                    </li>
                    <li>
                        <a href="guru.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Guru</a>
                    </li>
                    <li>
                        <a href="fungsi/logout.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container mx-auto py-20 px-10 h-[80vh] grid grid-cols-2 gap-10">
        <div class="w-full flex justify-center items-center h-auto">
            <img src="images/img-4.svg" alt="" class="w-3/4">
        </div>
        <div class="w-full h-auto flex flex-col gap-3 items-center justify-center">
            <p class="text-4xl font-bold text-gray-600">YUK ABSEN</p>
            <p class="text-xl font-bold text-gray-600">Silahkan klik tombol presensi yang ada di bawah ini</p>
            <form action="" method="post">
                <input type="hidden" value="<?= $_SESSION["id_siswa"] ?>" name="id_siswa">
                <button type="submit" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-900 hover:border-green-700 rounded" name="absen">
                    Presensi
                </button>
            </form>
        </div>
    </section>
</body>