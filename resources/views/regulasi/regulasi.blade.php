@extends('layouts.master')
@section('judul_halaman', 'Regulasi')
@section('konten')
    {{-- content --}}
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-white">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex py-8 h-24 rounded bg-gray-50 dark:bg-clear-400">
                    <p class="w-5.5 h-3.5 text-zinc-800 text-4xl font-extrabold font-['Poppins']">Regulasi
                    </p>
                </div>
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
            @endsection
