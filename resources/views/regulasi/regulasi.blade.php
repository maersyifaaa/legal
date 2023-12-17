<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regulasi</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- datepicker --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- sidebar --}}
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
                    <img class="w-1/2 rounded-full mb-2 ml-14"
                        src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-2-800x800.jpg"
                        alt="profil user">
                    <p class="text-center">Firda Kusuma Wardani</p>
                </div>
            </div>

            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/home"
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
                    <a href="/kontrak"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white-500 transition duration-75 dark:text-white-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kontrak</span>
                    </a>
                </li>
                <li>
                    <a href="/regulasi"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white-500 transition duration-75 dark:text-white-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Regulasi</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    {{-- sidebar end --}}

    {{-- content --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded bg-gray-50 dark:bg-clear-400">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-4xl font-extrabold font-['Poppins']">Regulasi
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

            {{-- accordion --}}
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span>Pasal 1</span>
                        <span>Kewajiban Pegawai</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 ">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">1. Setiap pegawai wajib datang ke tempat kerja dan masuk kerja sebelum waktu keda yang
                            telah ditetapkan.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">2. setiap pegawai wajib melaksanakan tugas yang diberikan dengan tetap mencurahkan
                            perhatian penuh dan selalu mengikuti petunjuk atau iostruksi dengan baik untuk
                            memastikan bahwa produk atau layanan yang dihasilkan berkualitas.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">3.  Setiap pegawai wajib mengikuti dan mematuhi seluruh prosedur dan/atau
                            penmjuk/instnrksi yang diberikan oleh atasannya, manajemen atau pemimpin perusahaan
                            yang memiliki kewenangan untuk memberi petunjuk atau instruksi.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">4. Setiap pegawai wajib menunjukkan tingkah laku yang bak dan benar dengan tujuan
                            memberikan kepuasan, kepercayaan, dan citra positif kepada pelanggan.</p>
                       
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                        aria-controls="accordion-collapse-body-2">
                        <span>Pasal 2</span>
                        <span>Larangan-larangan bagi Pegawai</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">1. Memberikan keteratrgan palsu mengenai riwayat hidupny4 pendidikan, dan lain-lain
                            dalam hubungan kerja dengan perusahan. 
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">2. Membuat keputusan di luar batas wewenang sesuaiJbb description-nya.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">3. Berada di luar selain di tempat kerja di waknr/jam kerja tanpa izin dari aasan yang
                            bersaogkutan.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">4.  Melakukan penggelapm, manipulasi, menerima uang suap, komisi karena jabatannya
                            atau korupsi, penipuao, dan bermain judi.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">5. Menggunakan jabatan/posisi untuk kepentingan pribadi ataupun pihak lainnya seperti
                            keluarga, teman, den lain-lain yang dapat mengganggu dan/atau merugftan kepentingan
                            perusahaan.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">6. Menganiay4 menghina secara kasar, atau mengancam pihak pengusaha atau anggota
                            keluarganya atau pegawai lain dan anggota keluargany4 para pelanggan (customer) dalr
                            tamu perusahaan.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">7. MerusaVmenghilangkan buang/data-data milik perusahaan atau menempatkan baang
                            milik perusahaan secara sembarangan dalam posisi yang mudah terbakar dan/atau
                            terancam bahaya.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">8.  Melakukan hal-hal lain yang bertentangan dengan peraturan perusahaan dan perundangundangan yang berlaku.
                            </p>
                        
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                        aria-controls="accordion-collapse-body-3">
                        <span>Pasal 3</span>
                        <span>Hubungan Kerja</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">1. Formasi tenaga kerja ditetapkan oleh Pimpinan Perusahaan bersama-sama dengan penetapan Struktur Organisasi Perusahaan, uraian tugas (Job Description) tingkat golongan jabatan dan persyaratan-persyaratan dari tiaptiap jabatan/pekerja.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">2. Formasi tenaga kerja diperlukan untuk meningkatkan kinerja organisasi atau
                            untuk menjaga produktivitas, efektifitas dan efisiensi perusahaan khususnya di
                            dalam pengelolaan sumber daya manusia.
                            </p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">3. Formasi tenaga kerja menjadi dasar utama untuk memungkinkan adanya :
                            a. Penerimaan karyawan baru
                            b. Penempatan dan pemindahan karyawan
                            c. Pemberian promosi jabatan kepada karyawan.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">4. Formasi tenaga kerja dapat sewaktu-waktu diubah oleh pimpinan perusahaan
                            menurut keadaan dan kebutuhan / kepentingan perusahaan.</p>
                        
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-4">
             
                      
            </div>






</body>

</html>
