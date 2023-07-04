<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan - Jalan.com</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/css/tailwind.css">
</head>

<body>
    <!-- NAV -->
    <nav class="w-full z-50 bg-gray-100">
        <div class="container h-[70px] mx-auto flex items-center justify-center px-5 md:px-8 lg:px-10">
            <div class="flex items-center mr-40">
                <a href="./index.php" class="inline-flex items-center gap-x-1">
                    <img class="h-9" src="./assets/images/favicon.png" alt="Icon">
                    <span class="font-semibold text-xl text-blue-400">jalan.com</span>
                </a>
            </div>
            <div class="flex items-center gap-x-5 text-gray-500">
                <strong class="font-medium text-xl text-gray-900">Pesan</strong>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
                <strong class="font-medium text-xl text-gray-600">Bayar</strong>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
                <strong class="font-medium text-xl text-gray-600">Selesai</strong>
            </div>
        </div>
    </nav>
    <!-- MAIN -->
    <main class="pt-20 pb-40">
        <div class="container mx-auto flex items-start px-5 md:px-10 lg:px-20 md:gap-x-10 lg:gap-x-14">
            <section class="w-8/12 bg-gray-100 py-6 px-8 rounded-md shadow">
                <div class="flex items-center gap-x-5 mb-8">
                    <div class="h-10 w-10 rounded-full flex items-center justify-center bg-blue-600 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h2 class="font-semibold text-lg text-gray-900">Detail Pemesan</h2>
                </div>
                <div class="flex items-center flex-wrap mb-3">
                    <h3 class="w-3/12 font-semibold text-lg text-gray-900">Nama Lengkap</h3>
                    <p class="w-9/12 text-lg text-gray-700 py-2 px-5 rounded bg-gray-200">Alexandrian Armadani Deva</p>
                </div>
                <div class="flex items-center flex-wrap mb-3">
                    <h3 class="w-3/12 font-semibold text-lg text-gray-900">Alamat Email</h3>
                    <p class="w-9/12 text-lg text-gray-700 py-2 px-5 rounded bg-gray-200">Alexandrian Armadani Deva</p>
                </div>
                <div class="flex items-center flex-wrap mb-3">
                    <h3 class="w-3/12 font-semibold text-lg text-gray-900">Nomor Telephone</h3>
                    <p class="w-9/12 text-lg text-gray-700 py-2 px-5 rounded bg-gray-200">Alexandrian Armadani Deva</p>
                </div>
                <div class="flex items-center flex-wrap mb-3">
                    <h3 class="w-3/12 font-semibold text-lg text-gray-900">Tanggal Lahir</h3>
                    <p class="w-9/12 text-lg text-gray-700 py-2 px-5 rounded bg-gray-200">Alexandrian Armadani Deva</p>
                </div>
            </section>
            <aside class="w-4/12 bg-gray-100 py-6 px-6 rounded-md shadow">
                <h3 class="font-semibold text-lg text-gray-900 mb-5">Penerbangan</h3>
                <div class="flex items-center gap-x-5 text-base text-gray-800 mb-5">
                    <span>Yogyakarta</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>                      
                    <span>Jakarta</span>                      
                </div>
                <div class="flex items-center gap-x-5 mb-5">
                    <img class="h-8" src="./assets/images/favicon.png" alt="Plane">
                    <h2 class="font-semibold text-lg text-gray-900">Garuda Indonesia</h2>
                </div>
                <div class="flex items-center gap-x-5 text-base text-gray-800 mb-10">
                    <span>2023-07-01</span>
                    <span class="inline-block h-3 w-3 rounded-full bg-gray-300"></span>
                    <div class="flex items-center text-gray-800 gap-x-3">
                        <span>17.00</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                        <span>19.00</span>
                    </div>
                </div>
                <h3 class="font-semibold text-lg text-gray-900 mb-5">Kebijakan Tiket</h3>
                <div class="mb-10">
                    <div class="flex items-center gap-x-5 text-gray-700 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                        <strong class="font-medium">Bisa Refund</strong>
                    </div>
                    <div class="flex items-center gap-x-5 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>                                                 
                        <strong class="font-medium">Bisa Reschedule</strong>
                    </div>
                </div>
                <h3 class="font-semibold text-lg text-gray-900 mb-5">Total Pembayaran</h3>
                <strong class="font-semibold text-2xl text-blue-600">IDR 1.180.000</strong>
                <a href="./pembayaran.php?flight_id=<?php echo $_GET['flight_id'] ?>" class="flex items-center justify-center rounded-md w-full py-4 rounded bg-blue-600 text-white font-medium text-lg mt-10">LANJUTKAN KE PEMBAYARAN</a>
            </aside>
        </div>
    </main>
    <!-- FOOTER -->
    <?php include_once './templates/footer.php'; ?>
</body>

</html>