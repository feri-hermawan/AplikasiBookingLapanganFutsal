@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h2 class="font-semibold text-lg lg:text-2xl">Edit Profile</h2>
        </div>
        <div>
            <div class="mt-6 lg:mt-10 lg:ml-20">
                <form>
                    <div class="block">
                        <div class="ml-2 mb-1 mt-3">
                            <div class="w-[100px] h-[100px] rounded-xl shadow-lg bg-cover" style="background-image: url('/img/profile/default-user/Kobo.jpg');">
                            </div>
                            <div>
                                <input type="file" class="text-sm text-slate-600 file:text-sm file:rounded-lg file:border-0 file:bg-primary file:text-white">
                            </div> 
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-2 mb-1 mt-3">
                            <label for="">Nama </label>
                        </div>
                        <div class="lg:max-w-[450px]">
                            <input class="input-form lg:w-full" type="text" value="Feri Hermawan">
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-2 mb-1 mt-3">
                            <label for="">Email </label>
                        </div>
                        <div class="lg:max-w-[450px]">
                            <input class="input-form lg:w-full" type="email" value="ferihermawan@gmail.com">
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-2 mb-1 mt-3">
                            <label for="">Alamat </label>
                        </div>
                        <div class="lg:max-w-[450px]">
                            <input class="input-form lg:w-full" type="text" value="jl.prapatan Bantarkawung RT 02/01">
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-2 mb-1 mt-3">
                            <label for="">No HP / Whatsapp </label>
                        </div>
                        <div class="lg:max-w-[450px]">
                            <input class="input-form lg:w-full" type="number" value="085157132366">
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-2 mb-1 mt-3">
                            <label for="">Password <span class="text-red-500">*</span><p class="italic text-[9px]">jika tidak ingin mengganti password, maka kosongkan saja</p></label>
                        </div>
                        <div class="lg:max-w-[450px]">
                            <input class="input-form lg:w-full" type="password">
                        </div>
                    </div>
                    <div class="flex mt-5 mb-5 lg:ml-1 lg:mt-10">
                        <div class="bg-yellow-500 w-[80px] text-center px-1 py-2 rounded-md text-white shadow-lg hover:bg-yellow-400 lg:rounded-xl lg:shadow-xl">
                            <button type="submit">Save</button>
                        </div>
                        <div class="bg-red-500 w-[80px] ml-[5px] text-center px-1 py-2 rounded-md text-white shadow-lg hover:bg-red-400 lg:rounded-xl lg:shadow-xl">
                            <a href="/profile/view">Cancel</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection