@extends('layouts.master')
@section('judul_halaman', 'Pelaporan Hukum')
@section('konten')
    {{-- content --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded bg-gray-50 dark:bg-clear-400 w-1/2">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-4xl font-extrabold font-['Poppins']">Pelaporan Hukum</p>
                </div>
            </div>
            <form method="POST" action="{{ route('pelaporan_hukum.store') }}">
                @csrf
                <div class="grid gap-10 mb-3 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Nama
                            Pelapor</label>
                        <input name="nama_pelapor" type="text" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Your Name" required>

                        <label for="nip"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-black">NIP</label>
                        <input name="karyawan_nip" type="text" id="nip"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Your NIP" required>

                        <label for="div"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-black">Divisi</label>
                        <input name="divisi_pelapor" type="text" id="div"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Your Divisi" required>

                        <label for="email"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                        <input name="email" type="text" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Enter Your Email" required>

                        <label for="tenggat"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-black">Tenggat</label>
                        <input name="tenggat" type="date" id="tenggat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>

                    <div>
                        <label for="perihal"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Perihal</label>
                        <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
                            class="text-black bg-amber-600 hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-amber-300 block w-fit
        font-medium rounded-lg text-sm px-10 py-2.5 text-center inline-flex items-center dark:bg-white-600 dark:hover:bg-white-700 dark:focus:ring-amber-600"
                            type="button">Perihal <svg class="w-2.5 h-2.5 ms-7" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDefaultCheckbox"
                            class="z-10 hidden w-48 bg-white divide-y divide-amber-600 rounded-lg shadow dark:bg-white-600 dark:divide-amber-600">
                            <ul class="p-3 space-y-3 text-sm text-black-700 dark:text-black-500"
                                aria-labelledby="dropdownCheckboxButton">
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" id="radio-item-1" type="radio"
                                            value="Kecelakaan kerja"
                                            class="w-4 h-4 text-black-600 bg-gray-100 border-blck-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-1"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Kecelakaan
                                            kerja</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" checked id="checkbox-item-2" type="radio"
                                            value="Kejadian Berbahaya Lain"
                                            class="w-4 h-4 text-black-600 bg-gray-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-2"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Kejadian
                                            Berbahaya Lain</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" id="checkbox-item-3" type="radio" value="Korupsi"
                                            class="w-4 h-4 text-black-600 bg-black-100 border-blak-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-3"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Korupsi</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" id="checkbox-item-4" type="radio" value="Kecurangan"
                                            class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-4"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Kecurangan</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" id="checkbox-item-5" type="radio"
                                            value="Penggelapan"
                                            class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-5"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Penggelapan</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" id="checkbox-item-6" type="radio" value="Suap"
                                            class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-6"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Suap</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <input name="perihal_laporan" id="checkbox-item-7" type="radio"
                                            value="Pelanggaran saat pengadaan barang/jasa"
                                            class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
                                        <label for="checkbox-item-7"
                                            class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Pelanggaran
                                            saat pengadaan barang/jasa</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        {{-- /status-pelaporan/hukum --}}
                        <button type="submit"
                            class="text-black bg-amber-600 focus:ring-4 focus:outline-none focus:ring-white-300 w-1/2 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 
    text-center dark:bg-white-600 dark:hover:bg-amber-500 dark:focus:ring-black-800">
                            Submit
                        </button>
                    </div>
            </form>
        @endsection
