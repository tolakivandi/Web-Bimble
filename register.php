<?php
require_once "./fungsi/auth.php";
if (isset($_SESSION["email"])) {
	header("Location:home.php");
	exit;
}
$connection = mysqli_connect("localhost", "root", "", "bimble");

$kelas = mysqli_query($connection, "SELECT * FROM kelas");

$data = [];

while ($class  = mysqli_fetch_assoc($kelas)) {
	$data[] = $class;
}

if (isset($_POST["register"])) {
	$register = register($_POST);
	if ($register > 0) {
		echo "
			<script>
                alert('Akun telah terdaftar');
                document.location.href= './login.php';
            </script>
			";
	} else {
		echo "
			<script>
                alert('Akun gagal terdaftar');
            </script>
			";
	}
}
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-sky-100 to-sky-300">
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
						<a href="login.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Login</a>
					</li>
					<li>
						<a href="register.php" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:p-0 rounded focus:outline-none" aria-current="page">Register</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Container -->

	<div class="container mx-auto">
		<div class="flex justify-center px-6 my-12">
			<!-- Row -->
			<div class="w-full xl:w-3/4 lg:w-11/12 flex">
				<!-- Col -->
				<div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover bg-center rounded-l-lg border-2" style="background-image:url(https://images.unsplash.com/photo-1526657782461-9fe13402a841?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=392&q=80)"></div>
				<!-- Col -->
				<div class="w-full lg:w-7/12 bg-cyan-500 p-5 rounded-lg lg:rounded-l-none border-2">
					<h3 class="pt-4 text-2xl font-semibold text-center">Create an Account!</h3>
					<form class="px-8 pt-6 pb-8 mb-4 bg-cyan-500 rounded" action="" method="post">
						<div class="mb-4 md:flex md:justify-between">
							<div class="w-full mb-4 md:mr-2 md:mb-0">
								<label class="block mb-2 text-sm font-bold text-gray-900" for="nama">
									Nama
								</label>
								<input autocomplete="off" class="w-full px-3 py-2 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="nama" type="text" name="nama" placeholder="Nama" />
							</div>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-900" for="email">
								Email
							</label>
							<input autocomplete="off" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Email" />
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-900" for="telpon">
								Telepon
							</label>
							<input autocomplete="off" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="telpon" type="text" name="telpon" placeholder="Telepon" />
						</div>
						<div class="mb-4">
							<label for="gender" class="block mb-2 text-sm font-bold text-gray-900">Gender</label>
							<select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="gender" id="gender">
								<option selected>Gender</option>
								<option value="male">Male</option>
								<option value="female">Famale</option>
							</select>
						</div>
						<div class="mb-4">
							<label for="id_kelas" class="block mb-2 text-sm font-bold text-gray-900">Kelas</label>
							<select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="id_kelas" id="id_kelas">
								<option selected>Kelas</option>
								<?php foreach ($data as $item) : ?>
									<option value="<?= $item["id_kelas"] ?>"><?= $item["kelas"] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="mb-4">
							<label class="block mb-2 text-sm font-bold text-gray-900" for="birthday">
								Birthday
							</label>
							<input autocomplete="off" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="birthday" type="date" name="birthday" placeholder="Birthday" />
						</div>
						<div class="mb-4 md:flex md:justify-between">
							<div class="mb-4 md:mr-2 md:mb-0 w-full">
								<label class="block mb-2 text-sm font-bold text-gray-900" for="password">
									Password
								</label>
								<input autocomplete="off" class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-900 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="********" />
							</div>
						</div>
						<div class="mb-6 text-center">
							<button class="w-full px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-900 focus:outline-none focus:shadow-outline" type="submit" name="register">
								Register Account
							</button>
						</div>
						<hr class="mb-6 border-t" />
						<div class="text-center">
							<a class="inline-block text-sm text-white align-baseline hover:text-black" href="login.php">
								Already have an account? Login!
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>