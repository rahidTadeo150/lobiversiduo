<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/3197b77032.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Lobi Poliwangi Informasi Beasiswa</title>
</head>
<body class="font-montserrat">
    <header>
        <nav class="container flex items-center py-4 px-5 mt-2 sm:mt-0">
            <div class="flex justify-center">
                <img src="/imageweb/poliwangi.png" alt="img" class="w-12 h-12 mr-3">
                <div class="">
                    <p class="text-2xl font-extrabold">Lobi Poliwangi</p>
                    <p class="text-base font-normal">Lobi Poliwangi</p>
                </div>
            </div>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 uppercase text-xs">
                <li class="cursor-pointer">Features</li>
                <li class="cursor-pointer">Features</li>
                <li class="cursor-pointer">Features</li>
                <button type="button" class="bg-blue-500 text-white rounded-md px-7 py-3 uppercase">Login</button>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end text-2xl"><i class="fa-solid fa-bars"></i></div>
        </nav>
    </header>
    <section class="relative">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h2 class="text-black text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                    Lobi Poiliwangi BAK
                </h2>
                <p class="text-lg text-gray-600 text-center lg:text-left mb-6">Tempat Anda Dapat Mencari Informasi Beasiswa dan Lomba Dengan Mudah</p>
                <div class="flex justify-center flex-wrap gap-6">
                    <button class="shadow-md py-3 px-6 rounded-md transition duration-300 bg-blue-500 text-white hover:bg-white hover:text-black"> Yuk Mulai Journeymu Disini</button>
                    <button class="shadow-md py-3 px-6 rounded-md transition duration-300 bg-white hover:bg-blue-500 hover:text-white">Lihat Mahasiswa Berprestasi</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
