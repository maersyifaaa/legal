<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- datepicker --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<header>
    <nav class="bg-gradient-to-b from-amber-600 fixed w-full h-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo.png" class="h-10">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button class="text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">
                    <a href="/sign-in" type="button">Sign in</a>
                </button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white md:bg-transparent md:text-black md:p-0 md:dark:text-black" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-600 md:p-0 md:dark:hover:text-amber-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontrak</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-600 md:p-0 md:dark:hover:text-amber-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pelaporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
</header>

<div class="bg-scroll h-full w-full flex"  style="background-image: url('images/bg1.jpg')">
    <div class="grid grid-cols-2 gap-4 items-stretch max-h-full">
            <div class="w-auto self-end pt-20">
                <p class="text-5xl text-white font-semibold px-32 pt-40">Divisi Legal</p>
                <p class="text-xl text-white font-lightz px-32 pt-10 py-96">Pada perusahaan penambangan minyak terdapat divisi legal yang dapat memastikan kepatuhan terhadap semua aspek hukum yang berlaku.</p>
            </div>
    </div>
</div>

</body>
</html>