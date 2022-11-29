@extends('layouts.main')
@section('konten')
    <div class="container mx-auto flex mb-[100px] lg:mb-[20px]">
        <div class="mx-auto border-solid bg-white mt-[100px] md:mt-2 rounded-xl shadow-xl md:w-full">
            <div class="py-4 px-2 ">
            <form>
                <div class="font-bold flex mb-5 text-2xl md:text-4xl">
                    <h1 class="mx-auto">Login</h1>
                </div>
                <div class="login-form">
                    <label class="mr-2 font-semibold" for="">Username</label>
                    <input class="input-form" type="text" placeholder="Masukan Username...">
                </div>
                <div class="login-form">
                    <label class="mr-2 font-semibold" for="">Password</label>
                    <input class="input-form" type="text" placeholder="Masukan Password...">
                </div>
                <div class="mx-auto max-w-[250px]">
                    <button class=" border-solid rounded-md py-2 px-3 md:shadow-xl shadow-xl text-white btn-primary hover:bg-blue-400" type="button">Masuk</button>
                </div>
                <div class="mx-auto block max-w-[600px]">
                    <hr class="my-5 ">
                </div>
                <div class="mx-auto block max-w-[250px] mt-5 md:mb-[103px]">
                    <span class="italic mx-auto">
                        <a class="text-blue-700 hover:text-blue-400" href="/register">Buat Akun</a> Atau <a class="text-blue-700 hover:text-blue-400" href="">Reset Password</a>
                    </span>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection