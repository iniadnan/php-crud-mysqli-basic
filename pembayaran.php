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
    <title>Pembayaran - Jalan.com</title>
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
                <a href="./pemesanan.php?flight_id=<?php echo $_GET['flight_id'] ?>" class="font-medium text-xl text-gray-900">Pesan</a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
                <strong class="font-medium text-xl text-gray-900">Bayar</strong>
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
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>                          
                    </div>
                    <h2 class="font-semibold text-lg text-gray-900">Detail Pembayaran</h2>
                </div>
                <div class="flex items-center flex-wrap gap-x-5">
                    <div class="h-[200px] w-[200px] flex items-center justify-center text-center bg-white rounded cursor-pointer">
                        <div>
                            <img class="mx-auto w-[100px]" src="./assets/images/bank.png" alt="Bank">
                            <h6 class="mx-auto text-center font-semibold text-base text-blue-600 mt-5">Transfer Bank</h6>
                        </div>
                    </div>
                    <div class="h-[200px] w-[200px] flex items-center justify-center text-center bg-white rounded cursor-pointer">
                        <div>
                            <img class="mx-auto w-[100px]" src="./assets/images/mc.png" alt="Bank">
                            <h6 class="mx-auto text-center font-semibold text-base text-blue-600 mt-5">MasterCard</h6>
                        </div>
                    </div>
                    <div class="h-[200px] w-[200px] flex items-center justify-center text-center bg-white rounded cursor-pointer">
                        <div>
                            <img class="mx-auto w-[100px]" src="./assets/images/visa.png" alt="Bank">
                            <h6 class="mx-auto text-center font-semibold text-base text-blue-600 mt-5">Visa</h6>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="w-4/12 bg-gray-100 py-6 px-6 rounded-md shadow">
                <h3 class="font-semibold text-lg text-gray-900 mb-5">Detail Pembayaran</h3>
                <div class="flex items-center justify-between mb-2">
                    <h4 class="font-semibold text-base text-gray-800">Total Harga Tiket</h4>
                    <strong class="font-semibold text-base text-blue-600">Rp 1.180.000</strong>
                </div>
                <div class="flex items-center justify-between">
                    <h4 class="font-semibold text-base text-gray-800">Biaya Layanan</h4>
                    <strong class="font-semibold text-base text-blue-600">Rp 10.000</strong>
                </div>
                <div class="my-5 border-b border-gray-300"></div>
                <div class="flex items-center justify-between mb-5">
                    <h4 class="font-semibold text-base text-gray-800">Total Tagihan</h4>
                    <strong class="font-semibold text-base text-blue-600">Rp 1.300.000</strong>
                </div>
                <a href="./status-pembayaran.php?flight_id=<?php echo $_GET['flight_id'] ?>" class="flex items-center justify-center rounded-md w-full py-4 rounded bg-blue-600 text-white font-medium text-lg mt-10">BAYAR SEKARANG</a>
            </aside>
        </div>
    </main>
    <!-- FOOTER -->
    <?php include_once './templates/footer.php'; ?>
</body>

</html>