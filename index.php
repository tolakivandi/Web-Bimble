<?php
session_start();
if (isset($_SESSION["email"])) {
    header("Location:home.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link href="./dist/output.css" rel="stylesheet" />
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

                </ul>
            </div>
        </div>
    </nav>
    <!-- component -->
    <section class="dark:bg-white-200 dark:text-gray-100">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 w-[90%]">
                <img src="images/img-2.svg" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 ">
            </div>
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leading-none sm:text-5xl text-black">Welcome<span class="dark:text-cyan-900"> Di_class
                        <br>
                    </span>Bimbel
                </h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12 text-gray-900 font-bold">Selamat datang di website class bimbel! Kami senang Anda telah berkunjung ke sini.
                    <br class="hidden md:inline lg:hidden"> Kami berharap website ini dapat memberikan informasi dan pengetahuan yang bermanfaat bagi Anda dalam menunjang kebutuhan belajar dan
                    <br class="hidden md:inline lg:hidden"> meningkatkan kemampuan akademik maupun non-akademik Anda.
                </p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a rel="noopener noreferrer" href="login.php" class="px-8 py-3 text-lg font-semibold rounded dark:bg-cyan-600 dark:text-black">Login</a>
                    <a rel="noopener noreferrer" href="register.php" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-700 dark:bg-blue-200 dark:text-black">Register</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>