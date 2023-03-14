@extends('admin.index-dashboard')
@section('dashboard')
    <div class="konten-layout-admin">
        <div class="text-center">
            <span class="font-bold text-2xl">Setting Konfigurasi</span>
        </div>
        <form action="/office-config/edit" method="POST" enctype="multipart/form-data">
            @csrf
        <div>
            <div class="mt-5">
                <label for="">Email</label>
                <input type="email" name="email" class="block border border-slate-500 py-1 px-2 rounded-lg" value="{{$office->email}}">
            </div>
            <div class="mt-5">
                <label for="">Kontak WA</label>
                <input type="text" name="kontak_wa" class="block border border-slate-500 py-1 px-2 rounded-lg" value="{{$office->kontak_wa}}">
            </div>
            <div class="mt-5">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="block border border-slate-500 py-1 px-2 rounded-lg" value="{{$office->alamat}}">
            </div>
            <div class="mt-5">
                <label for="">Harga Sewa per-Jam</label>
                <input type="text" name="harga_sewa" class="block border border-slate-500 py-1 px-2 rounded-lg" value="{{$office->harga_sewa}}">
            </div>
            <div class="mt-10">
                <button type="submit" class="bg-blue-500 py-1 px-2 text-white rounded-xl">Simpan</button>
            </div>
        </div>
        </form>
    </div>

    @if(session()->has('BerhasilUpdate'))
    <script>
        swal("Berhasil", "{{session('BerhasilUpdate')}}", "success");
    </script>
    @endif
@endsection