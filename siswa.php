 <?php
    session_start();
    if (!isset($_SESSION["email"])) {
        header("Location:login.php");
        exit;
    }
    ?>
 <!doctype html>
 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="/dist/output.css" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
     <link href="/dist/output.css" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body class="bg-gradient-to-r from-sky-200 to-sky-400">
     <nav class="bg-cyan-700 text-white py-4">
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
                         <a href="./kelas.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Tambah Data Kelas</a>
                     </li>

                     <li>
                         <a href="login.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Login</a>
                     </li>
                     <li>
                         <a href="register.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Register</a>
                     </li>
                     <li>
                         <a href="jadwal.php" class="text-white hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Jadwal</a>
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
     <div class="bg-cyan-900 flex justify-center items-center h-screen">
         <table class="shadow-2xl font-[poppins] border-2 border-cyan-200 w-9/12 py-3 px-6">
             <tr>
                 <th class="py-3 bg-cyan-800">NAMA</th>
                 <th class="py-3 bg-cyan-800">TAGGAL LAHIR</th>
                 <th class="py-3 bg-cyan-800">KELAS</th>
                 <th class="py-3 bg-cyan-800">EMAIL</th>
                 <th class="py-3 bg-cyan-800">PASSWORD</th>
                 <th class="py-3 bg-cyan-800">GENDER</th>
                 <th class="py-3 bg-cyan-800">BIRDHDAY</th>
                 <th class="py-3 bg-cyan-800">TELPON</th>
             </tr>
             <tr class="bg-cyan-200 cursor-pointer duration-300">
                 <td class="py-3 px-6">ivan</td>
                 <td class="py-3 px-6">27-12-2003</td>
                 <td class="py-3 px-6">llX-RPL 1</td>
                 <td class="py-3 px-6">ivandi@gmail.com</td>
                 <td class="py-3 px-6">12345</td>
                 <td class="py-3 px-6">male</td>
                 <td class="py-3 px-6">sahurra</td>
                 <td class="py-3 px-6">087846806757</td>
             </tr>
             </tbody>
         </table>
     </div>
 </body>