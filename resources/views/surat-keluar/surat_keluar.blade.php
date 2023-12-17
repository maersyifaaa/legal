<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keluar</title>

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-[1024px] relative bg-white">
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
            <div class="w-[77px] h-[133px] left-[40px] top-[170px] absolute">
                <img class="w-[69px] h-[69px] left-[4px] top-0 absolute rounded-[110px]" src="images/muka-ida.png" />
                <div
                    class="w-[77px] h-[35px] left-0 top-[80px] absolute text-center text-orange-100 text-[15px] font-semibold font-['Poppins']">
                    Firda</div>
                <div
                    class="w-[77px] h-[34px] left-0 top-[100px] absolute text-center text-orange-100 text-[10px] font-semibold font-['Poppins'] underline">
                    View Profile</div>
            </div>
            <div class="w-[77px] h-[0px] left-[40px] top-[145px] absolute border border-amber-500"></div>
            <img class="w-[110px] h-[55px] left-[24px] top-[45px] absolute rounded-[100px] border border-amber-600"
                src="images/logo.png" />
        </div>
        <div class="h-[75px] left-[273px] top-[100px] absolute">
            <div
                class="w-[274px] h-[75px] left-[1px] top-0 absolute text-zinc-800 text-4xl font-extrabold font-['Poppins']">
                Surat Keluar</div>
        </div>
        <form action="/surat-keluar" method="post" enctype="multipart/form-data">
            @csrf
            <div class="w-[92px] h-[50px] left-[274px] top-[633px] absolute">
                <div class="w-[92px] h-[50px] left-0 top-0 absolute bg-amber-600 rounded-lg border"></div>
                <button type="submit"
                    class="w-[52px] left-[20px] top-[13px] absolute text-center text-orange-100 text-base font-normal font-['Inter'] leading-normal">submit</button>
            </div>
            <div class="w-[391px] h-[100px] left-[817px] top-[478px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                    <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                    <input type="file"
                        class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200" "text-zinc-500 text-base font-normal font-['Inter'] leading-normal"
                        name="dokumen_pdf" placeholder="Enter Text Here...">
                </div>
                <div
                    class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                    Input PDF</div>
            </div>
            <div class="w-[391px] h-[233px] left-[817px] top-[212px] absolute">
                <div class="w-[391px] h-[113px] left-0 top-[120px] absolute">
                    <div class="border border-zinc-200 rounded-lg p-5 flex flex-col">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-amber-600" name="perihal" value="Kerja Sama">
                            <span class="ml-2">Kerja Sama</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-amber-600" name="perihal"
                                value="Penggabungan (Merger)">
                            <span class="ml-2">Penggabungan (Merger)</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-amber-600" name="perihal" value="Saham">
                            <span class="ml-2">Saham</span>
                        </label>
                    </div>
                </div>
                <div
                    class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                    Perihal</div>
            </div>
            <div class="w-[391px] h-[100px] left-[274px] top-[478px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                    <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                    <input type="text"
                        class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200" "text-zinc-500 text-base font-normal font-['Inter'] leading-normal"
                        name="nomor_surat" placeholder="Enter Text Here...">
                </div>
                <div
                    class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                    Nomor Surat</div>
            </div>
            <div class="w-[391px] h-[100px] left-[274px] top-[345px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                    <div class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200"></div>
                    <input type="text"
                        class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200" "text-zinc-500 text-base font-normal font-['Inter'] leading-normal"
                        name="judul_surat" placeholder="Enter Text Here..." required>
                </div>
                <div
                    class="w-[350px] h-[50px] left-0 top-0 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                    Judul Surat</div>
            </div>
            <div id="Forms" class="h-[100px] left-[274px] top-[212px] absolute">
                <div class="w-[391px] h-[50px] left-0 top-[50px] absolute">
                    <input type="text"
                        class="w-[391px] h-[50px] left-0 top-0 absolute rounded-lg border border-zinc-200" "text-zinc-500 text-base font-normal font-['Inter'] leading-normal"
                        name="nama_instansi" placeholder="Enter Text Here..." required>
                </div>
                <div
                    class="w-[350px] h-[50px] left-0 top-100 absolute text-slate-500 text-xl font-semibold font-['Poppins']">
                    Nama Instansi</div>
            </div>
        </form>
    </div>
</body>

</html>

