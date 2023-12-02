<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelaporan Hukum</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>

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

    {{-- content --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded bg-gray-50 dark:bg-clear-400 w-1/2">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-4xl font-extrabold font-['Poppins']">Pelaporan Hukum</p>
                </div>

                {{-- <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-2xl text-gray-400 dark:text-gray-500">
            <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
         </p>
            </div> --}}
            </div>

            
<form method="POST" action="{{ route('pelaporan_hukum.store') }}">
  @csrf
    <div class="grid gap-10 mb-3 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Nama Pelapor</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Enter Your Name" required>
            
            <label for="Divisi" class="block mb-1 text-sm font-medium text-gray-900 dark:text-black">NIP</label>
            <input type="text" id="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Enter Your NIP" required>

            <label for="Divisi" class="block mb-1 text-sm font-medium text-gray-900 dark:text-black">Divisi</label>
            <input type="text" id="div" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/4 p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Enter Your Divisi" required>

            <label class="block mb-2 py-1 text-sm font-medium text-gray-900 dark:text-black" for="file_input">Upload file</label>
            <input class="block text-sm text-gray-900 border border-white-300 rounded-lg cursor-pointer bg-white-50 dark:text-gray-500 focus:outline-none w-3/4 dark:bg-white-700 dark:border-white-600 dark:placeholder-white-400" 
            id="file_input" type="file">

        </div>

        <div>
        <label for="perihal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Perihal</label>        
        <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-black bg-amber-600 hover:bg-amber-300 focus:ring-4 focus:outline-none focus:ring-amber-300 block w-1/2 
        font-medium rounded-lg text-sm px-10 py-2.5 text-center inline-flex items-center dark:bg-white-600 dark:hover:bg-white-700 dark:focus:ring-amber-600" 
        type="button">Perihal <svg class="w-2.5 h-2.5 ms-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" >
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </button>

<!-- Dropdown menu -->
<div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-amber-600 rounded-lg shadow dark:bg-white-600 dark:divide-amber-600">
    <ul class="p-3 space-y-3 text-sm text-black-700 dark:text-black-500" aria-labelledby="dropdownCheckboxButton">
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-gray-100 border-blck-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
          <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Kecelakaan kerja</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
            <input checked id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-gray-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
            <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Kejadian Berbahaya Lain</label>
          </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-black-100 border-blak-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
          <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Korupsi</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
          <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Kecurangan</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
          <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Penggelapan</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
          <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Suap</label>
        </div>
      </li>
      <li>
        <div class="flex items-center">
          <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-black-600 bg-black-100 border-black-300 rounded focus:ring-black-500 dark:focus:ring-black-600 dark:ring-offset-black-700 dark:focus:ring-offset-black-700 focus:ring-2 dark:bg-black-600 dark:border-black-500">
          <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-black-900 dark:text-black-300">Pelanggaran saat pengadaan barang/jasa</label>
        </div>
      </li>
    </ul>
</div>

        </div>
        

        <div>
    <a href="/status-pelaporan" type="submit" class="text-black bg-amber-600 focus:ring-4 focus:outline-none focus:ring-white-300 w-1/2 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 
    text-center dark:bg-white-600 dark:hover:bg-amber-500 dark:focus:ring-black-800" >Submit
    </a>
        </div>
</form>
    
</body>
</html>