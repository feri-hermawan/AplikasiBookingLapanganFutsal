@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h2 class="font-semibold text-lg lg:text-2xl">Membuat Kata sandi Baru</h2>
        </div>
        <div class="flex mt-5">
            <div class="mx-auto w-[90px] h-[90px] bg-cover lg:w-[150px] lg:h-[150px]" style="background-image: url('/img/icons/content-icons/new-pass.png')"></div>
        </div>
        <div class="mt-10">
            <div class="flex">
                <label class="mx-auto font-semibold" for="">Kata Sandi Baru <span class="text-red-500">*</span></label>
            </div>
            <div class="flex">
                <input class="mx-auto border-2 rounded-lg w-[250px] border-slate-400 py-3 px-2 lg:w-[400px] placeholder:text-center placeholder:italic" type="password" placeholder="Masukan Kata sandi baru">
            </div>
        </div>
        <div class="mt-10">
            <div class="flex">
                <label class="mx-auto font-semibold" for="">Konfirmasi Kata Sandi Baru <span class="text-red-500">*</span></label>
            </div>
            <div class="flex">
                <input class="mx-auto border-2 rounded-lg w-[250px] border-slate-400 py-3 px-2 lg:w-[400px] placeholder:text-center placeholder:italic" type="password" placeholder="Konfirmasi Kata sandi baru">
            </div>
        </div>
        <div class="flex mt-10 mb-5">
            <button class="border-2 mx-auto rounded-xl py-3 px-2 btn-primary text-white">Buat Baru</button>
        </div>
    </div>
@endsection