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
    <nav></nav>
    <!-- HEADER -->
    <header class="h-[600px] w-full relative">
        <img class="h-full w-full object-cover" src="./assets/images/header_background.jpg" alt="Airport">
        <div class="h-full w-full flex items-center justify-center absolute top-0 left-0 z-10"
            style="background-color: rgba(0,0,0,0.2);">
            <form action="#" method="GET" class="w-[500px] mx-auto">
                <h1 class="font-semibold text-4xl text-white text-center"><label for="lokasi">Mau ke mana hari
                        ini?</label></h1>
                <div class="w-full flex items-center gap-x-3 py-3 px-5 bg-white rounded-full my-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input type="text" name="cari_tiket" class="bg-transparent w-full" id="lokasi" placeholder="">
                </div>
                <div class="flex items-center justify-center gap-x-10">
                    <span class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>
                    <a href="#" class="font-mediumt text-lg text-white">Jakarta</a>
                    <a href="#" class="font-mediumt text-lg text-white">Bali</a>
                    <a href="#" class="font-mediumt text-lg text-white">Yogyakarta</a>
                    <a href="#" class="font-mediumt text-lg text-white">Bandung</a>
                </div>
            </form>
        </div>
    </header>
    <!-- MAIN -->
    <main class="pt-20 pb-32 px-40">
        <div class="container mx-auto px-5 md:px-8 lg:px-10">
            <h2 class="font-semibold text-2xl text-blue-600 mb-3">Pilih Penerbangan</h2>
            <p class="text-base text-gray-600">Rekomendasi Penerbangan Termurah</p>
            <div class="mt-10">
                <article class="w-full flex items-center bg-gray-100 py-8 px-10 rounded-lg">
                    <div class="mr-20">
                        <h3 class="font-semibold text-2xl text-gray-900">Garuda Indonesia</h3>
                        <p class="font-semibold text-base text-black">ID 51258</p>
                    </div>
                    <div class="mr-20 text-center">
                        <p class="font-semibold text-xl text-gray-900">12.00</p>
                        <p class="text-base text-gray-900">Yogyakarta</p>
                    </div>
                    <div class="mr-24 text-center">
                        <p class="font-semibold text-xl text-gray-900">12.00</p>
                        <p class="text-base text-gray-900">Bali</p>
                    </div>
                    <div>
                        <p class="font-semibold text-2xl text-gray-900">IDR 1.200.000</p>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="bg-blue-600 py-3 px-6 rounded-md text-white font-medium text-base">Pilih</a>
                    </div>
                </article>
            </div>
        </div>
    </main>
    <?php include_once './templates/footer.php'; ?>
</body>

</html>