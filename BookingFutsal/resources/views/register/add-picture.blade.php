@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h2 class="font-semibold text-lg lg:text-2xl">Add Picture Profile</h2>
        </div>
        <div class="mt-7 mb-5">
            <div class="container bg-slate-400 mx-auto border-black shadow-lg w-[150px] h-[150px] lg:w-[200px] lg:h-[200px] rounded-full flex p-2">
                <div class="m-auto bg-origin w-full flex h-full group">
                    <img class="m-auto max-w-[90px] max-h-[90px] group-hover:scale-110   lg:max-w-[130px] lg:max-h-[130px] lg:group-hover:scale-110 transition ease-in-out duration-200" src="/img/profile/default-user/default.png" alt="Add Profile">
                </div>
            </div>
        </div>
        <div class="mx-auto bg-slate-300 w-[250px] lg:w-[300px] p-3 rounded-full mt-5">
            <input id="input-file" type="file" class="text-sm text-slate-400 file:text-violet-600 file:rounded-full file:border-0 file:text-sm file:bg-violet-50 file:font-semibold file:py-2 file:px-3 file:mr-4">
        </div>
        <div id="complete-btn" class="text-center text-white font-semibold my-5">
            <button class="bg-blue-600 py-3 px-2 max-w-[100px] rounded-xl shadow-xl hover:bg-blue-400">Selesai</button>
        </div>
        <div class="text-center text-blue-500 hover:text-blue-300 mt-5 mb-14 lg:mb-5">
            <a href="">Skip, Add Pict Later</a>
        </div>
    </div>
@endsection