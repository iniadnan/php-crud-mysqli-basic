<!-- NAV -->
<nav class="h-[70px] w-full fixed top-0 left-0 z-50 bg-white">
    <div class="h-full container mx-auto flex items-center px-5 md:px-8 lg:px-10">
        <div class="flex items-center mr-40">
            <a href="./index.php" class="inline-flex items-center gap-x-1">
                <img class="h-9" src="./assets/images/favicon.png" alt="Icon">
                <span class="font-semibold text-xl text-blue-400">jalan.com</span>
            </a>
        </div>
        <div class="flex items-center gap-x-10">
            <a href="./index.php" class="font-medium text-lg text-gray-800">Home</a>
            <a href="./index.php" class="font-medium text-lg text-gray-800">Promo</a>
            <a href="./index.php" class="font-medium text-lg text-gray-800">Reward</a>
        </div>
        <div class="flex items-center gap-x-10 ml-auto">
            <a href="./index.php" class="font-medium text-lg text-gray-800">App</a>
            <a href="./index.php" class="font-medium text-lg text-gray-800">Bantuan</a>
            <a href="./profile.php" class="font-medium text-lg text-gray-800">Cek Pesanan</a>
            <div class="flex items-center gap-x-2">
                <img src="./assets/images/id.png" alt="Indonesia">
                <strong class="font-semibold text-lg text-gray-800">IDR</strong>
            </div>
            <!-- IF NOT LOGIN -->
            <a href="./login.php" class="font-medium text-base text-white py-2 px-5 bg-blue-600 rounded-md">Log In / Daftar</a>
            <!-- IF LOGIN -->
        </div>
    </div>
</nav>