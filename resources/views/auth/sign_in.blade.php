<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- datepicker --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/datepicker.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="bg-gradient-to-b from-amber-600 min-h-screen flex items-center">
        <div class="flex-1 max-w-full mx-auto min-h-screen flex">
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-stretch max-h-full">
                    <div class="w-auto self-end">
                        <p class="text-2xl text-white font-bold px-32">Divisi Legal</p>
                        <p class="text-sm text-white font-lightz px-32 pt-6">Pada perusahaan penambangan minyak terdapat divisi legal yang dapat memastikan kepatuhan terhadap semua aspek hukum yang berlaku.</p>
                    <img class="max-w-full" src="images/login-image.png">
                </div>
                </div>
                <div class="container max-w-md bg-white shadow-xl m-auto p-10 rounded-md">
                    <!-- <div class="md:w-1/2 px-8 md:px-16"> -->
                        <h2 class="font-bold text-2xl text-black">Sign In</h2>
                        <p class="text-xs mt-4 text-black">If you are already a member, easily log in</p>

                        <form action="" class="flex flex-col gap-4">
                            <input class="py-3 px-6 mt-8 rounded-xl border-hidden shadow-md bg-[#FFEDD3] text-black text-xs placeholder-amber-600" type="email" name="email" placeholder="Username or email address">
                            <div class="relative">
                                <input class="py-3 px-6 rounded-xl border-hidden shadow-md bg-[#FFEDD3] text-black text-xs placeholder-amber-600 w-full" type="password" name="password" placeholder="Password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                </svg>
                            </div>
                            <button class="mt-8 bg-amber-600 rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
                        </form>

                        <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                            <hr class="border-[#FFEDD3]">
                            <p class="text-center text-sm">OR</p>
                            <hr class="border-[#FFEDD3]">
                        </div>

                        <button class="py-2 w-full mt-5 flex justify-center items-center rounded-xl border-hidden shadow-md bg-[#FFEDD3] text-amber-600 text-xs hover:scale-105 duration-300">
                            <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                            <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                            <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                            <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                            </svg>
                            Sign in with Google
                        </button>

                        <div class="mt-5 text-xs border-b border-[#FFEDD3] py-4 text-black">
                            <a href="#">Forgot your password?</a>
                        </div>

                        <div class="mt-3 text-xs flex justify-between items-center">
                            <p class="text-black">Don't have an account?</p>
                            <button class="py-2 px-5 border bg-amber-600 text-white rounded-xl hover:scale-110 duration-300">Register</button>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>