<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Surat Keluar</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative bg-white">

        @foreach ($surat_keluar as $srtklr)
            <div class="w-[1127px] h-11 left-[233px] top-[646px] absolute">
                <div
                    class="w-48 h-11 p-2.5 left-0 top-0 absolute border-zinc-200 justify-center items-center inline-flex">
                    <div class="text-center text-zinc-500 text-base font-normal font-['Poppins']">
                        {{ $srtklr->nomor_surat }}</div>
                </div>
                <div
                    class="w-[235px] h-11 p-2.5 left-[192px] top-0 absolute border-l border-zinc-200 justify-center items-center inline-flex">
                    <div class="text-center text-zinc-500 text-base font-normal font-['Poppins']">{{ $srtklr->perihal }}</div>
                </div>
                <div
                    class="w-[137px] h-11 p-2.5 left-[427px] top-0 absolute border-l border-zinc-200 justify-center items-center inline-flex">
                    <div class="text-center text-zinc-500 text-base font-normal font-['Poppins']">{{ $srtklr->created_at }}</div>
                </div>
                <div
                    class="w-[136px] h-11 p-2.5 left-[564px] top-0 absolute border-l border-zinc-200 justify-center items-center inline-flex">
                    <div class="text-center text-zinc-500 text-base font-normal font-['Poppins']">{{ $srtklr->created_at }}</div>
                </div>
                <div
                    class="w-[195px] h-11 p-2.5 left-[700px] top-0 absolute border-l border-zinc-200 justify-center items-center inline-flex">
                    <div class="text-center text-zinc-500 text-base font-normal font-['Poppins']">tugas@gmail.com</div>
                </div>
                <div
                    class="w-[115px] h-11 p-2.5 left-[895px] top-0 absolute border-l border-zinc-200 justify-center items-center inline-flex">
                    <div class="w-6 h-6 relative">
                        <div class="w-[26px] h-[26px] left-[-3.50px] top-[-4px] absolute">
                          <a href="{{ asset('storage/' . $srtklr->dokumen_pdf) }}">Dokumen PDF</a>
                        </div>
                    </div>
                </div>
                <div
                    class="w-[117px] h-11 p-2.5 left-[1010px] top-0 absolute border-l border-zinc-200 justify-center items-center inline-flex">
                    <div class="text-center text-zinc-500 text-base font-normal font-['Poppins']">Submitted</div>
                </div>
            </div>
        @endforeach

        <div class="w-[1127px] h-[50px] left-[233px] top-[201px] absolute">
            <div
                class="w-48 h-[50px] p-2.5 left-0 top-0 absolute bg-gray-50 rounded-tl-[5px] rounded-tr-[5px] border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">Nomor Surat</div>
            </div>
            <div
                class="w-[235px] h-[50px] p-2.5 left-[192px] top-0 absolute bg-gray-50 rounded-tr-[5px] border-l border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">Perihal</div>
            </div>
            <div
                class="w-[137px] h-[50px] p-2.5 left-[427px] top-0 absolute bg-gray-50 rounded-tr-[5px] border-l border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">Keluar</div>
            </div>
            <div
                class="w-[136px] h-[50px] p-2.5 left-[564px] top-0 absolute bg-gray-50 rounded-tr-[5px] border-l border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">Tenggat</div>
            </div>
            <div
                class="w-[195px] h-[50px] p-2.5 left-[700px] top-0 absolute bg-gray-50 rounded-tr-[5px] border-l border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">Email</div>
            </div>
            <div
                class="w-[115px] h-[50px] p-2.5 left-[895px] top-0 absolute bg-gray-50 rounded-tr-[5px] border-l border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">PDF</div>
            </div>
            <div
                class="w-[117px] h-[50px] p-2.5 left-[1010px] top-0 absolute bg-gray-50 rounded-tr-[5px] border-l border-b border-zinc-200 justify-center items-center inline-flex">
                <div class="text-center text-black text-xl font-semibold font-['Poppins']">Ket</div>
            </div>
        </div>
        <div class="w-[1127px] h-[490px] left-[233px] top-[201px] absolute rounded-[5px] border border-zinc-200"></div>
        <div class="w-[157px] h-[1024px] left-0 top-0 absolute">
            <div
                class="w-[157px] h-[1024px] left-0 top-0 absolute bg-amber-600 rounded-tr-[30px] rounded-br-[30px] shadow">
            </div>
            <div class="w-[47px] h-[134px] left-[55px] top-[820px] absolute">
                <div class="w-[47px] h-[47px] left-0 top-[87px] absolute">
                    <img class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"
                        src="images/button-log-out.png" />
                </div>
                <div class="w-[47px] h-[47px] left-0 top-0 absolute">
                    <img class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"
                        src="images/button-dark-mode.png" />
                </div>
            </div>
            <div class="w-[77px] h-[0px] left-[40px] top-[780px] absolute border border-amber-500"></div>
            <div class="w-[47px] h-[221px] left-[55px] top-[412px] absolute">
                <div class="w-[47px] h-[47px] left-0 top-[174px] absolute">
                    <img class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"
                        src="images/button-regulasi.png" />

                </div>
                <div class="w-[47px] h-[47px] left-0 top-[87px] absolute">
                    <img class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"
                        src="images/button-kontrak.png" />
                </div>
                <div class="w-[47px] h-[47px] left-0 top-0 absolute">
                    <img class="w-[47px] h-[47px] left-0 top-0 absolute bg-amber-500 rounded-[10px]"
                        src="images/button-home.png" />
                </div>
            </div>
            <div class="Foto w-[77px] h-[133px] left-[40px] top-[170px] absolute">
                <img class="MukaIda w-[69px] h-[69px] left-[4px] top-0 absolute rounded-[110px]"
                    src="images/muka-ida.png" />
                <div
                    class="Firda w-[77px] h-[35px] left-0 top-[75px] absolute text-center text-orange-100 text-[15px] font-semibold font-['Poppins']">
                    Firda</div>
                <div
                    class="ViewProfile w-[77px] h-[34px] left-0 top-[99px] absolute text-center text-orange-100 text-[10px] font-semibold font-['Poppins'] underline">
                    View Profile</div>
            </div>
            <div class="w-[77px] h-[0px] left-[40px] top-[145px] absolute border border-amber-500"></div>
            <img class="w-[110px] h-[55px] left-[24px] top-[45px] absolute rounded-[100px] border border-amber-600"
                src="images/logo.png" />
        </div>
        <div class="w-[390px] h-[75px] left-[233px] top-[100px] absolute">
            <div
                class="w-[388.58px] h-[75px] left-[1.42px] top-0 absolute text-zinc-800 text-4xl font-extrabold font-['Poppins']">
                Status Surat Keluar</div>
        </div>
    </div>

</body>

</html>
