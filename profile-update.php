<?php
include './systems/connections.php';
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Jalan.com</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/css/tailwind.css">
</head>

<body>
    <!-- NAV -->
    <?php include_once './templates/nav.php'; ?>
    <!-- HEADER -->
    <?php include_once './templates/header.php'; ?>
    <!-- CHECK NOT LOGIN RETURN TO LOGIN -->
    <main class="pt-20 pb-40">
        <div class="container mx-auto flex items-start px-5 md:px-10 lg:px-20 md:gap-x-10 lg:gap-x-14">
            <aside class="w-4/12 py-6 px-6 rounded-md shadow bg-gray-100">
                <div class="flex items-center gap-x-5 mb-10">
                    <div class="h-14 w-14 bg-blue-600 rounded-full flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>                          
                    </div>
                    <h2 class="font-medium text-xl text-gray-800"><?php echo $_SESSION['name']; ?></h2>
                </div>
                <a a href="./profile-update.php" class="flex items-center gap-x-3 bg-blue-600 py-3 px-5 text-white mb-5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>                      
                    <h3 class="font-medium text-lg text-white">Akun</h3>
                </a>
                <a href="./profile.php" class="flex items-center gap-x-3 bg-white py-3 px-5 text-gray-700 mb-5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>                                            
                    <h3 class="font-medium text-lg text-gray-700">Pesanan Saya</h3>
                </a>
                <div class="flex items-center gap-x-3 bg-white py-3 px-5 text-gray-700 mb-5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>                                                                  
                    <h3 class="font-medium text-lg text-gray-700">Reward</h3>
                </div>
                <div class="flex items-center gap-x-3 bg-white py-3 px-5 text-gray-700 mb-10 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>                                                                                      
                    <h3 class="font-medium text-lg text-gray-700">Pusat Bantuan</h3>
                </div>
                <a href="./systems/users/logout.php" class="flex items-center gap-x-3 bg-white py-3 px-5 text-gray-700 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>                                                                                                          
                    <h3 class="font-medium text-lg text-gray-700">Keluar</h3>
                </a>
            </aside>
            <section class="w-8/12">
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($CONNECTION, $sql);
            $user = mysqli_fetch_assoc($result);
            ?>
                <h3 class="font-semibold text-xl text-gray-900 mb-8">Ubah Profile</h3>
                <form class="w-full" method="POST" action="./systems/users/update_user.php">
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg bg-gray-100" type="email" name="email" value="<?php echo $user['email'] ?>" readonly>
                    </div>
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="hidden" name="old_password" value="<?php echo $user['password'] ?>">
                    </div>
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="password" name="password" value="<?php echo $user['password'] ?>">
                    </div>
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="text" name="name" value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="text" name="telephone" value="<?php echo $user['telephone'] ?>">
                    </div>
                    <div class="w-full mb-3">
                        <input class="w-full border rounded-md py-3 px-4 text-lg" type="date" name="tanggal_lahir" value="<?php echo $user['tanggal_lahir'] ?>">
                    </div>
                    <div class="w-full mb-10">
                        <button type="submit" name="submit" class="w-full bg-blue-600 text-white font-semibold text-lg py-2 rounded-md">Daftar</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <!-- FOOTER -->
    <?php include_once './templates/footer.php'; ?>
</body>

</html>