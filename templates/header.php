<header class="h-[600px] w-full relative">
    <img class="h-full w-full object-cover" src="./assets/images/header_background.jpg" alt="Airport">
    <div class="h-full w-full flex items-center justify-center absolute top-0 left-0 z-10"
        style="background-color: rgba(0,0,0,0.2);">
        <form action="./index.php" method="GET" class="w-[500px] mx-auto">
            <h1 class="font-semibold text-4xl text-white text-center"><label for="lokasi">Mau ke mana hari
                    ini?</label></h1>
            <div class="w-full flex items-center gap-x-3 py-3 px-5 bg-white rounded-full my-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <input type="text" name="kota" class="bg-transparent w-full" id="lokasi" placeholder="">
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
                <a href="./index.php?kota=Jakarta" class="font-mediumt text-lg text-white">Jakarta</a>
                <a href="./index.php?kota=Bali" class="font-mediumt text-lg text-white">Bali</a>
                <a href="./index.php?kota=Yogyakarta" class="font-mediumt text-lg text-white">Yogyakarta</a>
                <a href="./index.php?kota=Bandung" class="font-mediumt text-lg text-white">Bandung</a>
            </div>
        </form>
    </div>
</header>