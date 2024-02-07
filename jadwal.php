 <?php
  session_start();
  if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit;
  }
  require './fungsi/functions.php';
  $jadwal = mysqli_query($connection, "SELECT * FROM jadwal JOIN mapel ON jadwal.id_mapel = mapel.id_mapel JOIN kelas ON jadwal.id_kelas = kelas.id_kelas");


  ?>
 <!doctype html>
 <html>

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="/dist/output.css" rel="stylesheet">
   <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body class="bg-gradient-to-r from-sky-200 to-sky-400">
   <nav class="bg-cyan-600 text-white py-4">
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
   <div class="bg-cyan-800 flex justify-center items-center h-screen flex-col ">
     <table class="shadow-2xl font-[Poppins] border-2 border-cyan-200 w-6/12" style="box-shadow: 7px 14px 23px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 7px 14px 23px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 14px 23px 0px rgba(0,0,0,0.75);">
       <thead class="text-white">
         <tr>
           <th class="py-3 bg-cyan-800">NO</th>
           <th class="py-3 bg-cyan-800">MAPEL</th>
           <th class="py-3 bg-cyan-800">KELAS</th>
           <th class="py-3 bg-cyan-800">JAM</th>
           <th class="py-3 bg-cyan-800">HARI</th>
           <th class="py-3 bg-cyan-800">ACTION</th>
         </tr>
         <?php $i = 1; ?>
         <?php foreach ($jadwal as $item) : ?>
       <tbody class="text-cyan-900 text-center">
         <tr class="bg-cyan-200 cursor-pointer duration-300">
           <td class="py-3 px-6"> <?= $i; ?> </td>
           <td class="py-3 px-6"> <?= $item["mapel"]; ?> </td>
           <td class="py-3 px-6"> <?= $item["kelas"]; ?> </td>
           <td class="py-3 px-6"> <?= $item["jam"]; ?> </td>
           <td class="py-3 px-6"> <?= $item["hari"]; ?> </td>
           <td class="py-3 px-6 flex gap-5 justify-center">
             <a href="./jadwal/updatejadwal.php?id=<?= $item["id_jadwal"] ?>" class="px-4 py-3 bg-cyan-500 rounded-xl text-black font-semibold border-black border-2">Update</a> |
             <a href="./jadwal/deletejadwal.php?id=<?= $item["id_jadwal"] ?>" onclick="return confirm('yakin?');" class="px-4 py-3 bg-cyan-500 rounded-xl text-black font-semibold border-black border-2">Delete</a>
           </td>
         </tr>
         <?php $i++; ?>
       <?php endforeach; ?>
       </tbody>
       </thead>
     </table>
     <button type="text" class=" bg-cyan-800 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6 ml-[630px] border-2 " style="box-shadow: 7px 14px 23px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 7px 14px 23px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 7px 14px 23px 0px rgba(0,0,0,0.75);"> <a href="./jadwal/createjadwal.php">Tambah Data</a> </button>
   </div>
 </body>

 </html>