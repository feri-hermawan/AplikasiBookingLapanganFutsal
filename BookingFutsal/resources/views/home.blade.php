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
<div class="mx-auto">
    <div class="h-14 border shadow-lg bg-teal-500 mb-1 grid grid-cols-12 text-white">
        <div clss="col-start-1" >
            <img class="w-16 h-10" src="/img/icons/Logo/logo-lap-futsal.png" alt="logo">
        </div>
            <div class="col-span-2 col-start-2 m-auto hover:text-slate-200"><a href="/jadwal-lapangan">Jadwal Lapangan</a></div>
            <div class="col-span-2 col-start-4 m-auto hover:text-slate-200"><a href="/pesan-lapangan">Pesan Lapangan</a></div>
            <div class="col-start-11 m-auto hover:text-slate-200"><a href="/login">Login <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M6 10a.75.75 0 01.75-.75h9.546l-1.048-.943a.75.75 0 111.004-1.114l2.5 2.25a.75.75 0 010 1.114l-2.5 2.25a.75.75 0 11-1.004-1.114l1.048-.943H6.75A.75.75 0 016 10z" clip-rule="evenodd" />
              </svg>
              </a></div>
    </div>
    <div class="container hidden" id="menu-mobile">
        <div class="w-full h-auto bg-slate-400 text-center group">
            <div class="mb-5"><a href="" class="text-slate-600 hover:text-black">Home</a></div>
            <div class="mb-5"><a href="" class="text-slate-600 hover:text-black">Register</a></div>
            <div class="mb-1"><a href="" class="text-slate-600 hover:text-black">Login</a></div>
        </div>
    </div>
    <div class="bg-teal-500 rounded-md mx-auto">
        <div class="w-full h-[34rem] " style="background-image: url('img/background/lapangan.jpeg')">
            <section>
                <h1>Test</h1>
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