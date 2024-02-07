 <?php
    session_start();
    if (!isset($_SESSION["email"])) {
        header("Location:../login.php");
        exit;
    }
    require '../fungsi/functions.php';

    $id = $_GET['id'];
    $mhs = query("SELECT * FROM jadwal JOIN mapel ON jadwal.id_mapel = mapel.id_mapel JOIN kelas ON jadwal.id_kelas = kelas.id_kelas WHERE id_jadwal=$id ")[0];


    if (isset($_POST["submit"])) {
        if (update($_POST) > 0) {
            echo "
            <script>
                alert('data berhasil di update');
                document.location.href= '../mapel.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal di update');
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

     <h1 class="font-bold flex justify-center py-10">Tambah Mapel</h1>
     <div class="flex justify-center py-52 px-7">
         <form method="post" action="">
             <input type="hidden" name="id" value="<?= $mhs["id_jadwal"]; ?> ">

             <label class="font-semibold" for="id_mapel">mapel :</label>
             <input class="bg-slate-700 rounded-lg py-3 px-2 w-full" type="text" name="mapel" id="id_mapel" value="<?= $mhs["mapel"]; ?> ">
             <br>
             <br>
             <button class="bg-blue-700 rounded-lg py-3 px-2" type="submit" name="submit" id="submit">Update data</button>
         </form>
     </div>


 </body>

 </html>