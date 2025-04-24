@extends('layout.structure')
<body class="overflow-hidden"> 
    <section class="h-[100vh] overflow-hidden">
        @include('include.navbar-unreg')
        <div class ="-z-10 absolute h-[100vh] top-0">
            <img src="{{ url('image/login-bg.svg') }}" alt="">
        </div>
        <div class="z-1 relative bg-white w-[695px] h-[100vh] ml-auto rounded-l-[50px] shadow-[0px_0px_100px_0px_rgba(0,0,0,0.25)]">
            <div class="right-[128px] mt-[240px] absolute text-start h-[582px] w-[440px]">
                <div>
                <h1 class="font-Host text-4xl font-extrabold">
                    Hi!
                </h1>
                <h1 class="font-Host text-4xl font-normal">
                    Selamat datang kembali
                </h1>
            </div>
            <form class="font-Host text-base font-normal mt-8">
                <div>
                    <label for="email">Email<span class="text-[#DA0700]">*</span></label><br>
                    <input type="email" placeholder="Masukkan Email" name="email" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"> 
                </div>
                <div class="mt-[18px]">
                    <label for="password">Kata Sandi<span class="text-[#DA0700]">*</span></label><br>
                    <input type="password" placeholder="Masukkan kata sandi" name="password" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"> 
                </div>
            </form>
                <a href="#"><i><u class="decoration-[#DA0700] justify-end flex text-sm -mt-4">Lupa kata sandi?</u></i></a>
                <div class="mt-[50px]">
                    <a href="" class="bg-[#DA0700] w-full h-[46px] rounded-full text-white font-extrabold text-lg font-Host traking-[101%] flex items-center justify-center">
                        Masuk
                    </a>
                    <a href="/signup" class="bg-white w-full h-[46px] rounded-full border border-black text-black font-normal text-lg font-Host mt-4  flex items-center justify-center">
                        Buat akun
                    </a>
                    <a class="bg-white w-full text-black font-normal text-lg font-Host mt-4  flex items-center justify-center">
                        <div class="flex gap-[10px] justify-center">
                            <img src="{{ url('image/google.svg') }}" alt="">
                            Masuk dengan Google
                        </div>
                    </a>
                </div>
            </div>
        </div>   
    </section>
</body>