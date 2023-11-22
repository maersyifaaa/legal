<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Masuk</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200 dark:text-amber-400 dark:hover:bg-amber-600 dark:focus:ring-amber-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-amber-600">
            <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Legal</span>
            </a>
            {{-- //profil --}}
            <div class="flex items-center justify-center my-6">
                <div class="items-center justify-center w-full">
                    <img class="w-1/2 rounded-full mb-2 ml-14" src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg" alt="profil user">
                    <p class="text-center">Firda Kusuma Wardani</p>
                </div>
            </div>

            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-white-500 transition duration-75 dark:text-white-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white-500 transition duration-75 dark:text-white-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kontrak</span>
                        <span
                            class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white-500 transition duration-75 dark:text-white-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Regulasi</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-600 dark:text-blue-100">5</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded bg-gray-50 dark:bg-clear-400">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-5xl font-extrabold font-['Poppins']">Surat Masuk
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
            {{-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div> --}}


            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-300">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Nama
                            Instansi</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-clear-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-amber-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-300">
                    <div class="mb-4 w-50">
                        <label for="drop-down"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Perihal</label>
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                            data-dropdown-trigger="hover"
                            class="w-full px-5 py-4 text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-600"
                            type="button">Pilih Perihal <svg class="w-3.5 h-2.5 ml-20" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHover"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white-700">
                            <ul class="py-2 text-sm text-slate-700 dark:text-slate-700"
                                aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-amber-600 dark:hover:text-white">Kerjasama</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-600 dark:hover:text-white">Merger</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-600 dark:hover:text-white">Saham</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-400">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Judul
                            Surat</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-clear-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-amber-500 dark:focus:border-blue-500">
                    </div>
                </div>
                {{-- <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        balqis
                    </p>
                </div> --}}
            </div>
            {{-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div> --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-400">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Nomor
                            Surat</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-clear-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-amber-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-clear-800">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">
                            Upload File</label>
                            <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file">
                    </div>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-clear-800">
                    <button type="button"
                        class="px-6 py-3.5 w-full text-base font-medium text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 rounded-lg text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Submit</button>
                </div>
                {{-- <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        andin
                    </p>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded bg-gray-50 dark:bg-clear-400">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-5xl font-extrabold font-['Poppins']">Surat Masuk
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
            {{-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div> --}}


            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-300">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Nama
                            Instansi</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-clear-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-amber-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-300">
                    <div class="mb-4 w-50">
                        <label for="drop-down"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Perihal</label>
                        <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
                            data-dropdown-trigger="hover"
                            class="w-full px-5 py-4 text-white bg-amber-600 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-600"
                            type="button">Pilih Perihal <svg class="w-3.5 h-2.5 ml-20" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownHover"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-white-700">
                            <ul class="py-2 text-sm text-slate-700 dark:text-slate-700"
                                aria-labelledby="dropdownHoverButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-amber-600 dark:hover:text-white">Kerjasama</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-600 dark:hover:text-white">Merger</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-amber-600 dark:hover:text-white">Saham</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-400">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Judul
                            Surat</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-clear-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-amber-500 dark:focus:border-blue-500">
                    </div>
                </div>
                {{-- <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        balqis
                    </p>
                </div> --}}
            </div>
            {{-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div> --}}
            <div class="grid grid-cols-2 gap-4">
                <div class="flex rounded bg-gray-50 h-28 dark:bg-clear-400">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">Nomor
                            Surat</label>
                        <input type="text" id="large-input"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-clear-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-amber-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-clear-800">
                    <div class="mb-4 w-full">
                        <label for="large-input"
                            class="block mb-4 text-slate-500 text-3xl font-semibold font-['Poppins']">
                            Upload File</label>
                            <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file">
                    </div>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-clear-800">
                    <button type="button"
                        class="px-6 py-3.5 w-full text-base font-medium text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 rounded-lg text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Submit</button>
                </div>
                {{-- <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        andin
                    </p>
                </div> --}}
            </div>
        </div>
    </div>


</body>
</html>
