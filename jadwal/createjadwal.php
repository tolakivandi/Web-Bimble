 <?php
    session_start();
    if (!isset($_SESSION["email"])) {
        header("Location:../login.php");
        exit;
    }
    require '../fungsi/functions_jadwal.php';
    $datmapel = mysqli_query($connection, "SELECT * FROM mapel");
    $datkelas = mysqli_query($connection, "SELECT * FROM kelas order by id_kelas desc");
    if (isset($_POST["submit"])) {
        if (add($_POST) > 0) {
            echo "
            <script>
                alert('data berhasil di tambahkan');
                document.location.href= '../jadwal.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal di tambahkan');
                document.location.href= '../jadwal.php';
            </script>
            ";
        }
    }
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>TAMBAH DATA</title>
     <link href="/dist/output.css" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>

     <style>
         label {
             display: block;
         }
     </style>
 </head>

 <body>
     <nav class="bg-cyan-600 text-white py-4 w-full">
         <div class="container mx-auto flex flex-wrap items-center justify-between">
             <a href="" class="flex h-max items-center gap-3 font-semibold">
                 <img src="../images/logo-pens.png" alt="" class="w-16">
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
                         <a href="../home.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
                     </li>

                     <li>
                         <a href="../kelas.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Tambah Data Kelas</a>
                     </li>

                     <li>
                         <a href="../login.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Login</a>
                     </li>
                     <li>
                         <a href="../register.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Register</a>
                     </li>
                     <li>
                         <a href="../jadwal.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Jadwal</a>
                     </li>
                     <li>
                         <a href="../guru.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Guru</a>
                     </li>
                     <li>
                         <a href="../fungsi/logout.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Logout</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <br>
     <h1 class="text-center font-bold py-5 px-6 ">Tambah Jadwal</h1>

     <form method="post" action="" class="w-1/4 mx-auto">
         <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
         <select id="id_mapel" name="id_mapel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
             <option selected>silahkan pilih</option>
             <?php foreach ($datmapel as $item) : ?>
                 <option value="<?= $item['id_mapel'] ?>"> <?= $item['mapel'] ?> </option>
             <?php endforeach ?>
         </select>
         <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
         <select id="id_kelas" name="id_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
             <option selected>silahkan pilih</option>
             <?php foreach ($datkelas as $item) : ?>
                 <option value="<?= $item['id_kelas'] ?>"> <?= $item['kelas'] ?> </option>
             <?php endforeach ?>
         </select>



         <div>
             <label class="font-semibold" for="jam">jam :</label>
             <input class="bg-slate-700 py-2 px-3 rounded-lg w-full text-white" type="time" name="jam" id="jam">
         </div>

         <div>
             <label class="font-semibold" for="hari">hari :</label>
             <input class="bg-slate-700 py-2 px-3 rounded-lg w-full text-white" type="text" name="hari" id="hari">
         </div>
         <br>
         <button class="bg-blue-700 rounded-lg font-semibold py-2 px-3" type="submit" name="submit" id="submit">tambah data</button>
     </form>


 </body>

 </html>