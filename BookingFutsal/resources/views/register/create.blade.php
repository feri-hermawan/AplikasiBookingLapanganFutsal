@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h3 class="font-semibold text-lg lg:text-2xl">REGISTER</h3>
        </div>
        <div class="mt-6 lg:mt-10 lg:ml-20">
            <form>
                <div class="block">
                    <div class="ml-2 mb-1 mt-3">
                        <label for="">Nama <span class="text-red-500">*</span></label>
                    </div>
                    <div class="lg:max-w-[450px]">
                        <input class="input-form lg:w-full" type="text" placeholder="Masukan nama lengkap">
                    </div>
                </div>
                <div class="block">
                    <div class="ml-2 mb-1 mt-3">
                        <label for="">Email <span class="text-red-500">*</span></label>
                    </div>
                    <div class="lg:max-w-[450px]">
                        <input class="input-form lg:w-full" type="email" placeholder="Masukan email">
                    </div>
                </div>
                <div class="block">
                    <div class="ml-2 mb-1 mt-3">
                        <label for="">No HP / Whatsapp <span class="text-red-500">*</span></label>
                    </div>
                    <div class="lg:max-w-[450px]">
                        <input class="input-form lg:w-full" type="number" placeholder="Masukan No Hp / WA">
                    </div>
                </div>
                <div class="block">
                    <div class="ml-2 mb-1 mt-3">
                        <label for="">Password <span class="text-red-500">*</span></label>
                    </div>
                    <div class="lg:max-w-[450px]">
                        <input class="input-form lg:w-full" type="password">
                    </div>
                </div>
                <div class="block mt-5 mb-5 lg:ml-1 lg:mt-10">
                    <div class="btn-primary max-w-[80px] px-2 py-3 rounded-md text-white shadow-lg hover:bg-blue-400 lg:rounded-xl lg:shadow-xl">
                        <button type="submit">Register</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
@endsection