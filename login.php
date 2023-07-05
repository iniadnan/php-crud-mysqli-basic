<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jalan.com</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/css/tailwind.css">
</head>

<body>
    <main class="h-screen w-screen relative bg-white flex">
        <!-- LEFT -->
        <div class="h-full w-1/2 relative">
            <section class="pt-32 px-20">
                <h1 class="w-2/3 font-semibold text-2xl text-gray-900 mb-3">Login untuk bisa menikmati semua keuntungannya</h1>
                <p class="w-2/3 text-base text-gray-600">Cukup email dan password yang sudah terdaftar</p>
            </section>
            <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2" src="./assets/images/login-background-bottom.png" alt="Login">
        </div>
        <!-- RIGHT -->
        <div class="h-full w-1/2 flex items-center bg-gray-100" style="border-top-left-radius: 48px; border-bottom-left-radius: 48px;">
            <div class="w-full">
                <form class="w-[500px] mx-auto" action="./systems/users/login.php" method="POST">
                    <a href="./index.php" class="inline-flex items-center justify-center gap-x-3 font-semibold text-base text-gray-800 mb-10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        <span>Back To Home</span>
                    </a>
                    <h3 class="font-semibold text-2xl text-black mb-10">Login</h3>
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="email" name="email" placeholder="Email atau Nomor Ponsel">
                    </div>
                    <div class="w-full mb-5">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="password" name="password" placeholder="Tulis password anda">
                    </div>
                    <div class="w-full mb-10">
                        <button type="submit" name="submit" class="w-full bg-blue-600 text-white font-semibold text-lg py-2 rounded-md">LogIn</button>
                    </div>
                    <div class="w-full mb-8">
                        <p class="text-base text-gray-600">Dengan login kamu menyetujui <span class="text-blue-600">Syarat & Ketentuan</span> dan <span class="text-blue-600">Kebijakan Privasi</span> yang berlaku.</p>
                    </div>
                    <div>
                        <p>Belum punya akun? <a href="./registration.php" class="text-blue-600">Buat Akun!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>