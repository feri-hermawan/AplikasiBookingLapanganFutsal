<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Feri Futsal Center"}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-Inter bg-latarbelakang">
    <header class="bg-primary absolute top-0 left-0  w-full max-h-[40px] lg:max-h-[55px] h-full flex items-center z-10 text-white">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4 mx-2 flex border-4 border-white">
                    <a href="\">Feri Futsal Center</a>
                </div>
                <div class="flex px-4 items-center">
                    <button id="humberger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="humberger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="humberger-line transition duration-300 ease-in-out"></span>
                        <span class="humberger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
                </div>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white max-w-[250px] rounded-lg shadow-md right-4 top-12 lg:block lg:max-w-full lg:static lg:bg-transparent lg:shadow-none lg:rounded-none ">
                    <ul class="block text-black lg:flex lg:text-white">
                        <li class="group">
                            <a href="/" class=" group-hover:text-slate-200 mx-8 py-2 flex">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/jadwal-lapangan" class=" group-hover:text-slate-200 mx-8 py-2 flex">Jadwal Lapangan</a>
                        </li>
                        <li class="group">
                            <a href="/pesan-lapangan" class=" group-hover:text-slate-200 mx-8 py-2 flex">Pesan Lapangan</a>
                        </li>
                        <li class="group">
                            <a href="/login" class=" group-hover:text-slate-200 mx-8 py-2 flex">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<div class="block mt-16">
    @yield('konten')
</div>
<footer class="bg-footerhalaman mt-[20px] md:mt-4 md:h-full bottom-0 max-h-full pt-[24px] pb-[12px] flex">
    <div class="container text-white mx-auto">
        <ul>
            <li>
                <span class="flex">
                    <div class="mx-auto flex">
                        <div class="flex mx-2">
                            <img src="/img/icons/footer-icons/fb-logo.png" alt="Logo Facebook">
                            <h5>Facebook</h5>
                        </div>
                        <div class="flex mx-2">
                            <img src="/img/icons/footer-icons/instagram-logo.png" alt="Logo Instagram">
                            <h5>Instagram</h5>
                        </div>
                        <div class="flex mx-2">
                            <img src="/img/icons/footer-icons/email-logo.png" alt="Logo Email">
                            <h5>Email</h5>
                        </div>
                    </div>
                </span>
            </li>
            <li>
                <hr class="opacity-30">
            </li>
            <li>
                <span class="flex">
                    <div class="mx-auto flex">
                        <a class="mx-2" href="">Contact</a>
                        <a class="mx-2" href="">Privacy</a>
                        <a class="mx-2" href="">About</a>
                    </div>
                </span>
            </li>
            <li>
                <span class="flex">
                    <div class="mx-auto flex">
                        <img class="max-h-[20px] max-w-[20px]" src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Copyright_white.svg" alt="CopyRight">
                        <h5 class="mx-2">2022 - Feri Futsal Center</h5>
                    </div>
                </span>
            </li>
        </ul>
    </div>
</footer>
    <script src="/Javascript/cssJavascript.js"></script>
</body>
</html>