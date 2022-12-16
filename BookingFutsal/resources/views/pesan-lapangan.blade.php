@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h2 class="font-semibold text-lg lg:text-2xl">Pesan Lapangan</h2>
        </div>
        <div class="mt-[60px] lg:ml-10">
            <div>
                <div class="mt-3 ">
                    <label class="block lg:text-[22px]" for="">Nama Pemesan <span class="text-red-500">*</span></label>
                    <input class="block input-form focus:outline-none focus:border-blue-400 lg:text-[20px]" type="text" value="Feri Hermawan">
                </div>
                <div class="mt-3">
                    <label class="block lg:text-[22px]">Tanggal <span class="text-red-500">*</span></label>
                    <input class="block input-form focus:outline-none focus:border-blue-400 lg:text-[20px]" type="date"data-date-inline-picker="true">
                </div>
                <div class="mt-3">
                    <label class="w-full block lg:text-[22px]" id="labelWaktu" for="">Mulai Jam <span class="text-red-500">*</span></label>
                    <input class="mt-2 input-form focus:outline-none focus:border-blue-400 lg:text-[20px]" type="time" name="waktu" id="waktu">
                </div>
                <div class="max-w-[200px] max-h-[100px] mt-3">
                    <label class="block lg:text-[22px]">Durasi Main <span class="text-red-500">*</span></label>
                    <div class="flex">
                        <input class="input-form w-[100px] h-[35px] lg:h-[50px] focus:outline-none focus:border-blue-400 lg:text-[20px]" type="number" min="1" max="5"><p class="ml-2 my-auto lg:text-center lg:font-semibold lg:text-lg">Jam</p>
                    </div>
                </div>
                <div class="mt-3">
                    <div>
                        <label class="block lg:text-[22px]">Pilih Lapangan <span class="text-red-500">*</span></label>
                        <select class="form-select appearance-none
                        block
                        w-[150px]
                        px-3
                        py-1.5
                        text-base
                        lg:text-[20px]
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded-lg
                        transition
                        ease-in-out
                        m-0
                        shadow-lg
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="pilihlapangan">
                        <option value="">1</option>
                        <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <label class="block lg:text-[22px]">Total Harga Rp. </label>
                    <input class="input-form disabled:text-teal-500 disabled:font-medium lg:text-[20px]" type="text" value="70.000" disabled>
                </div>
                <div class="mt-3 lg:text-[22px]">
                    <button class="bg-teal-500 rounded-lg border-2 border-slate-500 py-2 px-1 shadow-lg hover:bg-teal-400 mt-2 text-white lg:py-2 lg:px-2" type="button">Cek</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/Javascript/pesan.js"></script>
@endsection