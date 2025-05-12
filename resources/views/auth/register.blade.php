@extends('layout.structure')
<section>
    @include('include.navbar-unreg')
    <div class ="-z-10 absolute top-0">
        <img src="{{ url('image/login-bg.svg') }}" alt="">
    </div>
    <div class="z-1 relative bg-white w-[695px] h-screen ml-auto rounded-l-[50px] shadow-[0px_0px_100px_0px_rgba(0,0,0,0.25)]">
        <div class="right-[128px] mt-[200px] absolute text-start h-[582px] w-[440px]">
            <h1 class="font-Host text-4xl font-extrabold">
                Buat akunmu
            </h1>
            <form method="POST" action="{{ route('register') }}" class="font-Host text-base font-normal mt-8">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name">Nama Lengkap<span class="text-[#DA0700]">*</span></label><br>
                    <input type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Masukkan nama lengkap" 
                        value="{{ old('name') }}"
                        class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"
                        required 
                        autofocus 
                        autocomplete="name">
                    @error('name')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mt-[18px]">
                    <label for="email">Email<span class="text-[#DA0700]">*</span></label><br>
                    <input type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Masukkan Email" 
                        value="{{ old('email') }}"
                        class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"
                        required 
                        autocomplete="username">
                    @error('email')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-[18px]">
                    <label for="password">Kata Sandi<span class="text-[#DA0700]">*</span></label><br>
                    <input type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Masukkan kata sandi" 
                        class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"
                        required 
                        autocomplete="new-password">
                    @error('password')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mt-[18px]">
                    <label for="password_confirmation">Konfirmasi Kata Sandi<span class="text-[#DA0700]">*</span></label><br>
                    <input type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Masukkan konfirmasi kata sandi" 
                        class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"
                        required 
                        autocomplete="new-password">
                </div>

                <div class="mt-[18px]">
                    <input type="checkbox" id="terms" name="terms" class="font-Host" required>
                    <label for="terms">
                        Saya menyetujui <span class="text-[#DA0700]"><a href="">Terms of Service</a></span> dan <a href="" class="text-[#DA0700]">Privacy Policy</a>
                    </label>
                </div>

                <div class="mt-[19px]">
                    <button type="submit" class="bg-[#DA0700] w-full h-[46px] rounded-full text-white font-bold text-lg font-Host flex items-center justify-center">
                        Selanjutnya
                    </button>
                    <a href="/login" class="bg-white w-full h-[46px] rounded-full border border-black text-black font-normal text-lg font-Host mt-4 flex items-center justify-center">
                        Sudah punya akun
                    </a>
                </div>
            </form>
        </div>
    </div>   
</section>
