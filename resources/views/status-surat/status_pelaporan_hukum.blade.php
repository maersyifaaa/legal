@extends('layouts.master')

@section('judul_halaman', 'status-pelaporan')

@section('konten')

    {{-- content --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded ">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-4xl font-extrabold font-['Poppins']">Status Pelaporan Hukum
                    </p>
                </div>
                {{-- <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
            </div> --}}
            </div>

            {{-- content table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID Pelaporan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Perihal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Divisi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelaporanhukums as $pelaporanhukum)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $pelaporanhukum['id_hukum'] }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $pelaporanhukum['perihal_laporan'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pelaporanhukum['divisi_pelapor'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pelaporanhukum['email'] }}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @endsection
