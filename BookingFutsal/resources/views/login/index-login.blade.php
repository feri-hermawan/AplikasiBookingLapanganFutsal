@extends('layouts.main')
@section('konten')
    <div class="container flex md:max-w-full">
        <div class="mx-auto border-solid bg-white mt-[100px] md:mt-2 rounded-xl shadow-xl md:w-full">
            <div class="py-4 px-2 ">
            <form>
                <div class="font-bold flex mb-5 text-2xl md:text-4xl">
                    <h1 class="mx-auto">Login</h1>
                </div>
                <div class="mx-auto block max-w-[250px] mb-3">
                    <label class="mr-2 font-semibold" for="">Username</label>
                    <input class="py-2 px-3 border-solid border-2 rounded-lg placeholder:italic placeholder:text-slate-400" type="text" placeholder="Masukan Username...">
                </div>
                <div class="mx-auto block max-w-[250px] mb-3">
                    <label class="mr-2 font-semibold" for="">Password</label>
                    <input class="py-2 px-3 border-solid border-2 rounded-lg placeholder:italic placeholder:text-slate-400" type="text" placeholder="Masukan Password...">
                </div>
                <div class="mx-auto group max-w-[250px]">
                    <button class=" border-solid rounded-md py-2 px-3 shadow-lg text-white bg-blue-500 group-hover:bg-blue-400" type="button">Masuk</button>
                </div>
                <div class="mx-auto block max-w-[600px]">
                    <hr class="my-5 ">
                </div>
                <div class="mx-auto block max-w-[250px] mt-5 md:mb-[103px]">
                    <span class="italic mx-auto">
                        <a class="text-blue-500" href="">Buat Akun</a> Atau <a class="text-blue-500" href="">Reset Password</a>
                    </span>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection