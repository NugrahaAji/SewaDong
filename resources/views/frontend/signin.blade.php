@extends('layout.structure')
<section>
    @include('include.navbar-unreg')
    <div class ="-z-10 absolute top-0">
        <img src="{{ url('image/login-bg.svg') }}" alt="">
    </div>
    <div class="z-1 relative bg-white w-[695px] h-screen ml-auto rounded-l-[50px] shadow-[0px_0px_100px_0px_rgba(0,0,0,0.25)]">
        <div class="right-[128px] mt-[240px] absolute text-start h-[582px] w-[440px]">
            <h1 class="font-Host text-4xl font-extrabold">
                Buat akunmu
            </h1>
            <form class="font-Host text-base font-normal mt-8">
                <div>
                    <label for="email">Email<span class="text-[#DA0700]">*</span></label><br>
                    <input type="email" placeholder="Masukkan Email" name="email" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"> 
                </div>
                <div class="mt-[18px]">
                    <label for="password">Kata Sandi<span class="text-[#DA0700]">*</span></label><br>
                    <input type="password" placeholder="Masukkan kata sandi" name="password" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"> 
                </div>
                <div class="mt-[18px]">
                    <label for="cpassword">Konfirmasi Kata Sandi<span class="text-[#DA0700]">*</span></label><br>
                    <input type="password" placeholder="Masukkan kata sandi" name="cpassword" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"> 
                </div>
            </form>
            <input type="checkbox" class="font-Host">
                Saya menyetujui <span class="text-[#DA0700]"><a href="">Terms of Service</a></span> dan <a href="" class= "text-[#DA0700]">Privacy Policy</a> 
            <div class="mt-[19px]">
                <a href="/sigin-up" class="bg-[#DA0700] w-full h-[46px] rounded-full text-white font-bold text-lg font-Host  flex items-center justify-center">
                    Selanjutnya
                </a>
                <a href="/login" class="bg-white w-full h-[46px] rounded-full border border-black text-black font-normal text-lg font-Host mt-4  flex items-center justify-center">
                    Sudah punya akun
                </a>
                <a class="bg-white w-full text-black font-normal text-lg font-Host mt-4  flex items-center justify-center">
                    <div class="flex gap-[10px] justify-center">
                        <img src="{{ url('icon/google.svg') }}" alt="">
                        Masuk dengan Google
                    </div>
                </a>
            </div>
        </div>
    </div>   
</section>