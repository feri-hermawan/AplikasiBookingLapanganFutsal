<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futsal Bantarkawung</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-Inter">
<div class="container mx-auto">
    <div class="flex h-14 border shadow-lg bg-slate-50 mb-2">
            <div class="md:hidden">
                <button type="button" onclick="navbar()"><img src="/img/icons/navbar-mobile.png" alt="navbar" class="w-8 h-8 m-3 hover:w-10 hover:h-10 ease-in duration-200 origin-center"></button>
            </div>
            <div class="mx-auto p-3 md:flex">
                <section class="md:hidden">
                    <h2>Bantarkawung Futsal Center</h2>
                </section>
                <ul class="hidden md:flex md:justify-between md:mx-auto">
                    <li class="transition md:mx-2 md:hover:text-slate-600 md:hover:text-lg duration-300"><a href="">Home</a></li>
                    <li class="md:mx-2 md:hover:text-slate-600 md:hover:text-lg"><a href="">Pesan</a></li>
                    <li class="md:mx-2 md:hover:text-slate-600 md:hover:text-lg"><a href="">Login</a></li>
                    <li class="md:mx-2 md:hover:text-slate-600 md:hover:text-lg"><a href="">About</a></li>
                </ul>
            </div>
    </div>
    <div class="container hidden" id="menu-mobile">
        <div class="w-full h-auto bg-slate-400 text-center group">
            <div class="mb-5"><a href="" class="text-slate-600 hover:text-black">Home</a></div>
            <div class="mb-5"><a href="" class="text-slate-600 hover:text-black">Register</a></div>
            <div class="mb-1"><a href="" class="text-slate-600 hover:text-black">Login</a></div>
        </div>
    </div>
    <div class="w-full h-[34rem] flex rounded-sm" style="background-image: url(./img/background/lapangan.jpeg)">
        <div class="w-full h-[10rem] m-auto bg-slate-500/50 text-white">
            <section class="font-Inter font-semibold text-center text-xl mt-5">
                <h1>BANTARKAWUNG FUTSAL CENTER</h3>
            </section>
            <section class="font-Inter font-semibold text-center text-xl">
                <h1 class="italic">Tempatnya bermain Futsal dengan nyaman dan menyenangkan</h2>
            </section>
            <section class="text-center mt-5">
                <a href="" class="transition bg-orange-400 w-10 h-4 rounded-lg p-2 shadow-xl hover:bg-yellow-600">Pesan Sekarang</a>
            </section>
        </div>
    </div>
    <div class="bg-slate-700 text-white border shadow-lg mt-1 grid grid-cols-2 ">
        <div class="w-full p-4">
            <div class="flex md:w-full">
                <img src="/img/icons/footer-icons/locate_icon.png" alt="locate" class="w-5 h-7 mr-2">
                <h3 class="font-semibold">Lokasi</h3>
            </div>
            <p class="text-sm font-thin">Jl. Bantarkawung No 123, Rt02/01 , Kodepos : 52274</p>
            <p class="text-sm font-thin">Kec. Bantarkawung, Kab. Brebes, Prov. Jawa Tengah , INDONESIA</p>
        </div>
        <div class="w-full p-4">
            <div class="flex">
                <img src="/img/icons/footer-icons/contact_icon.png" alt="locate" class="w-5 h-5 mr-2">
                <h3 class="font-semibold">Kontak</h3>
            </div>
            <p class="text-sm font-thin">Whatsapp : 098283738221</p>
            <p class="text-sm font-thin">Email : bfc@gmail.com</p>
        </div>
    </div>
</div>
</body>
</html>