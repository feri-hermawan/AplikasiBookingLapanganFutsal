@extends('layouts.main')
@section('konten')
    <div class="konten-layout py-3 px-2">
        <div class="text-center">
            <h2 class="font-semibold text-lg lg:text-2xl">Jadwal Lapangan</h2>
        </div>
        <div class="mt-10">
            <div class="text-center">
                <label class="block">Pilih Tanggal</label>
                <input class="input-form" type="date" data-date-inline-picker="true">
            </div>
            <div class="text-center mt-5">
                <label class="block">Pilih Lapangan</label>
                <select class="border-slate-400 py-2 px-3 shadow-md md:shadow-lg border-solid border-2 rounded-lg text-center" name="pilihlapangan">
                    <option class="text-[12px] lg:text-lg" value="1">Lapangan 1</option>
                    <option class="text-[12px] lg:text-lg" value="2">Lapangan 2</option>
                </select>
            </div>
            <div class="text-center mt-5">
                <button class="border-2 border-slate-300 py-1 px-2 rounded-lg bg-yellow-500 hover:bg-yellow-400" type="button">Cari</button>
            </div>
        </div>
        <div class="mt-10 mb-[90px] lg:w-[900px] bg-yellow-500 lg:mx-auto">
            <div class="bg-primary">
            <table class="table-auto border-slate-600 text-center w-full text-white">
                <thead class="border px-3 py-2 bg-slate-700 ">
                    <tr>
                        <td class="border px-3 py-2">Nama</td>
                        <td class="border px-3 py-2">Waktu</td>
                        <td class="border px-3 py-2">Durasi</td>
                    </tr>
                </thead>
                <tbody class="">
                    {{-- <tr>
                        <th class="border px-3 py-2">Feri Hermawan</th>
                        <th class="border px-3 py-2">12.00</th>
                        <th class="border px-3 py-2">3 Jam</th>
                    </tr>
                    <tr>
                        <th class="border px-3 py-2">Idris Nabawi</th>
                        <th class="border px-3 py-2">14.00</th>
                        <th class="border px-3 py-2">2 Jam</th>
                    </tr>
                    <tr>
                        <th class="border px-3 py-2">Idris Nabawi</th>
                        <th class="border px-3 py-2">14.00</th>
                        <th class="border px-3 py-2">2 Jam</th>
                    </tr>
                    <tr>
                        <th class="border px-3 py-2">Idris Nabawi</th>
                        <th class="border px-3 py-2">14.00</th>
                        <th class="border px-3 py-2">2 Jam</th>
                    </tr>
                    <tr>
                        <th class="border px-3 py-2">Idris Nabawi</th>
                        <th class="border px-3 py-2">14.00</th>
                        <th class="border px-3 py-2">2 Jam</th>
                    </tr> --}}
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection