@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h2 class="font-semibold text-lg lg:text-2xl">Profile</h2>
        </div>
        <div class="mt-8 lg:flex max-w-full ">
            <section id="profile-1" class="lg:ml-10 lg:mr-10">
                <div class="mx-auto border-2 rounded-full border-slate-400 max-w-[100px] shadow-2xl lg:max-w-[300px]">
                    <img class="bg-cover rounded-full overflow-hidden" src="/img/profile/default-user/example.jpeg" alt="profile">
                </div>
                <div class="text-center mt-2 text-sm font-bold lg:text-xl lg:font-semibold">Feri Hermawan</div>
            </section>
            <div class="bg-sky-600 max-w-full p-[2px] my-10 lg:max-w-0 lg:max-h-full lg:my-3"></div>
            <section id="profile-2" class="lg:ml-5 lg:w-full lg:py-5 px-4 lg:border-2 lg:border-slate-400 lg:rounded-lg">
                <div class="text-center mb-5 font-semibold">Biodata</div>
                <div class=" border-slate-500 text-left">
                    <ul class="text-lg">
                        <li>
                            <div class="text-lg lg:text-2xl lg:mb-3">
                                <label class="font-semibold">Nama : </label>
                                <label class="font-medium">Feri Hermawan</label>
                            </div>
                        </li>
                        <li>
                            <div class="text-lg lg:text-2xl lg:mb-3">
                                <label class="font-semibold">Alamat : </label>
                                <label class="font-medium">Bantarkawung</label>
                            </div>
                        </li>
                        <li>
                            <div class="text-lg lg:text-2xl lg:mb-3">
                                <label class="font-semibold">Tanggal Lahir : </label>
                                <label class="font-medium">16 Januari 2000</label>
                            </div>
                        </li>
                        <li>
                            <div class="text-lg lg:text-2xl lg:mb-3">
                                <label class="font-semibold">HP / Whatsapp : </label>
                                <label class="font-medium">085157132366</label>
                            </div>
                        </li>
                        <li>
                            <div class="text-lg lg:text-2xl lg:mb-3">
                                <label class="font-semibold">Email : </label>
                                <label class="font-medium">ferihermawan007@gmail.com</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <section class="block my-3">
            <div class="bg-yellow-500 max-w-[80px] text-center py-3 px-2 rounded-xl text-white shadow-xl hover:bg-yellow-400 mt-5 lg:ml-[70px]">
                <a href="/profile/edit" class="text-lg">Edit</a>
            </div>
        </section>
    </div>
@endsection