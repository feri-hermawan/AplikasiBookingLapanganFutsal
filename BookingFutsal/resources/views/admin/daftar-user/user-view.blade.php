@extends('admin.index-dashboard')
@section('dashboard')
    <div class="konten-layout-admin">
        <div class="text-center">
            <span class="font-bold text-2xl">Daftar Pengguna Aplikasi</span>
        </div>
        <div class="mt-10 flex">
            <div class="mx-auto flex">
                <input class="border border-primary rounded-md placeholder:p-2 placeholder:text-sm px-2 py-1" type="text" name="search" id="searchid" placeholder="Pencarian . . . ">
                    <button type="button" class="my-auto ml-3 group"><svg class="content-center w-[20px] h-[20px] stroke-primary group-hover:scale-125" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="mt-10">
            <div>
                <table class="table-auto mx-auto">
                    <thead>
                        <tr class="text-center text-white bg-slate-400">
                            <td class="border-line">No. </td>
                            <td class="border-line">Nama Lengkap</td>
                            <td class="border-line">Username</td>
                            <td class="border-line">Email</td>
                            <td colspan="2" class="border-line">Aksi</td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="border-line">1</td>
                            <td class="border-line">Feri Hermawan</td>
                            <td class="border-line">feri123</td>
                            <td class="border-line">ferihermawan@gmail.com</td>
                            <td class="border-line"><svg class="w-[35px] h-[35px] stroke-1 stroke-white fill-blue-500 hover:fill-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              </td>
                            <td class="border-line "><svg class="w-[35px] h-[35px] stroke-1 stroke-white fill-red-400 hover:fill-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                              </td>
                        </tr>
                        <tr class="text-center">
                            <td class="border-line">1</td>
                            <td class="border-line">Feri Hermawan</td>
                            <td class="border-line">feri123</td>
                            <td class="border-line">ferihermawan@gmail.com</td>
                            <td class="border-line"><svg class="w-[35px] h-[35px] stroke-1 stroke-white fill-blue-500 hover:fill-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              </td>
                            <td class="border-line "><svg class="w-[35px] h-[35px] stroke-1 stroke-white fill-red-400 hover:fill-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                              </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection