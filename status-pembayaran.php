<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Jalan.com</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/css/tailwind.css">
</head>

<body>
    <nav class="w-full z-50 bg-gray-100">
        <div class="container h-[70px] mx-auto flex items-center justify-center px-5 md:px-8 lg:px-10">
            <div class="flex items-center mr-40">
                <a href="./index.php" class="inline-flex items-center gap-x-1">
                    <img class="h-9" src="./assets/images/favicon.png" alt="Icon">
                    <span class="font-semibold text-xl text-blue-400">jalan.com</span>
                </a>
            </div>
            <div class="flex items-center gap-x-5 text-gray-500">
                <a href="./pemesanan.php" class="font-medium text-xl text-gray-900">Pesan</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
                <a href="./pembayaran.html" class="font-medium text-xl text-gray-900">Bayar</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
                <strong class="font-medium text-xl text-gray-900">Selesai</strong>
            </div>
        </div>
    </nav>
    <main class="pt-20 pb-40">
        <div class="container mx-auto flex items-start px-5 md:px-10 lg:px-20 md:gap-x-10 lg:gap-x-14">
            <section class="w-6/12 mx-auto bg-gray-100 py-6 px-8 rounded-md shadow">
                <div class="mb-8">
                    <div class="h-24 w-24 mx-auto rounded-full flex items-center justify-center bg-blue-600 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>                                                 
                    </div>
                    <h2 class="font-semibold text-2xl text-blue-600 text-center mx-auto mt-5">Status Pembayaran</h2>
                </div>
                <div>
                    <h3 class="font-semibold text-lg text-gray-900 mb-3">Menunggu Pembayaran</h3>
                    <p class="text-base text-gray-700">Nomor Pesanan : <span class="font-semibold">310330002</span></p>
                    <p class="text-base text-gray-700 mb-5">Status : <span class="font-semibold">Menunggu Pembayaran</span></p>
                    <p class="text-base text-gray-700 mb-10">Pemesabnan anda telah dikonfirmasi oleh maskapai. Sisten kami sedang menunggu pembayaran diterima dari metode pembayara yang anda pilih.</p>
                    <p class="text-base text-gray-700">Kembali ke <a href="./index.php" class="text-blue-600">halaman utama</a></p>
                </div>
            </section>
        </div>
    </main>
    <?php include_once './templates/footer.php'; ?>
</body>

</html>