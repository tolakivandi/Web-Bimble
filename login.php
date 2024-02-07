<?php
require_once "./fungsi/auth.php";
if (isset($_SESSION["email"])) {
  header("Location:home.php");
  exit;
}

if (isset($_POST["login"])) {
  login($_POST);
}
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="images/images-3.jpg" alt="" class="w-full h-full object-cover">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

      <div class="w-full h-100">


        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

        <form class="mt-6" action="" method="POST">
          <div>
            <label class="block text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
          </div>

          <div class="mt-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
          </div>

          <div class="text-right mt-2">
            <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
          </div>

          <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white border-2 font-semibold rounded-lg
              px-4 py-3 mt-6" name="login">Log In</button>
        </form>
        <p class="mt-8">Need an account? <a href="register.php" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
            account</a></p>
      </div>
    </div>
  </section>
</body>

</html>