<?php
include './systems/connections.php';
// CHECK JIKA BELUM LOGIN AKAN DI ARAHKAN KE HALAMAN LOGIN
session_start();
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
    <!-- MAIN -->
    <main class="pt-20 pb-32 px-40">
        <div class="container mx-auto px-5 md:px-8 lg:px-10">
            <h2 class="font-semibold text-2xl text-blue-600 mb-3">Pilih Penerbangan</h2>
            <p class="text-base text-gray-600">Rekomendasi Penerbangan Termurah</p>
            <div class="mt-10">
                <?php
                $sql = "SELECT tickets.id, tickets.flight_id, tickets.price, tickets.from_destination, tickets.to_destination, tickets.date, tickets.time_flight, tickets.time_arrived, tickets.status, vendors.name FROM tickets INNER JOIN vendors ON tickets.vendor_id = vendors.id";
                $resultTickets = mysqli_query($CONNECTION, $sql);
                function rupiah($angka)
                {

                    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                    return $hasil_rupiah;

                }
                while ($ticket = mysqli_fetch_array($resultTickets)) { ?>
                    <article class="w-full relative flex items-center bg-gray-100 hover:bg-gray-200 pt-14 pb-8 px-10 rounded-lg mb-6">
                        <span class="font-semibold text-xs text-white py-2 px-5 absolute top-0 left-0 bg-blue-600 rounded-md"><?php echo $ticket['date'] ?></span>
                        <div class="mr-20">
                            <h3 class="font-semibold text-2xl text-gray-900"><?php echo $ticket['name'] ?></h3>
                            <p class="font-semibold text-base text-black">ID #<?php echo $ticket['flight_id'] ?></p>
                        </div>
                        <div class="mr-20 text-center">
                            <p class="font-semibold text-xl text-gray-900"><?php echo $ticket['time_flight'] ?></p>
                            <p class="text-base text-gray-900"><?php echo $ticket['from_destination'] ?></p>
                        </div>
                        <div class="mr-24 text-center">
                            <p class="font-semibold text-xl text-gray-900"><?php echo $ticket['time_arrived'] ?></p>
                            <p class="text-base text-gray-900"><?php echo $ticket['to_destination'] ?></p>
                        </div>
                        <div>
                            <p class="font-semibold text-2xl text-gray-900">IDR <?php echo rupiah($ticket['price']); ?></p>
                        </div>
                        <div class="ml-auto">
                            <a href="<?php echo $ticket['flight_id'] ?>" class="bg-blue-600 py-3 px-6 rounded-md text-white font-medium text-base">Pilih</a>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
    </main>
    <!-- FOOTER -->
    <?php include_once './templates/footer.php'; ?>
</body>

</html>