@extends('layouts.main')
@section('konten')
    <div>
        <div class="flex max-w-[full]">
            <div class="w-full h-[500px] border flex bg-origin-border bg-center" style="background-image: url('/img/background/lapangan futsal.jfif');">
                <span class="font-extrabold mx-auto my-auto">
                    <div class="text-center text-transparent bg-clip-text bg-gradient-to-r from-teal-400 via-white to-rose-500">
                        <p class="text-4xl mx-auto">BERMAIN FUTSAL SEMAKIN MUDAH</p>
                        <p class="text-xl mx-auto">PESAN KAPANPUN, DIMANAPUN</p>
                    </div>
                    <div class="container flex">
                        <div class=" mx-auto grid grid-cols-2 lg:grid-cols-4">
                            <img class="fill-white icons-home transition duration-500 ease-in-out" src="/img/icons/home-icons/score.svg" alt="Goal">
                            <img class="fill-white icons-home transition duration-500 ease-in-out" src="/img/icons/home-icons/goal.svg" alt="Goal">
                            <img class="fill-white icons-home transition duration-500 ease-in-out" src="/img/icons/home-icons/kick.svg" alt="Goal">
                            <img class="fill-white icons-home transition duration-500 ease-in-out" src="/img/icons/home-icons/waktu.svg" alt="Goal">
                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
@if(session()->has('loginBerhasil'))
<script>
    swal("Berhasil Login", "{{session('loginBerhasil') ." ". auth()->user()->name}}", "success");
</script>
@endif
@endsection