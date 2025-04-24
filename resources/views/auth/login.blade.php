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
    <form id="login-form" method="POST" action="{{ route('login') }}" class="font-Host text-base font-normal mt-8">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">Email<span class="text-[#DA0700]">*</span></label><br>
            <input id="email" placeholder="Masukkan Email" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-[18px]">
            <label for="password">Kata Sandi<span class="text-[#DA0700]">*</span></label><br>

            <input id="password" class="w-full h-12 rounded-full px-4 border border-[#989898] outline-none mt-2"
                            type="password"
                            placeholder="Masukkan kata sandi"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
    </form>
    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}"><i><u class="decoration-[#DA0700] justify-end flex text-sm -mt-4">Lupa kata sandi?</u></i></a>
    @endif            
                <div class="mt-[50px]">
                <a href="#" 
                    onclick="event.preventDefault(); document.getElementById('login-form').submit();"
                    class="bg-[#DA0700] w-full h-[46px] rounded-full text-white font-extrabold text-lg font-Host tracking-[101%] flex items-center justify-center">
                    Masuk
                </a>
                    <a href="/signup" class="bg-white w-full h-[46px] rounded-full border border-black text-black font-normal text-lg font-Host mt-4  flex items-center justify-center">
                        Buat akun
                    </a>
                    <a href="{{ url('/auth/google') }}" class="bg-white w-full text-black font-normal text-lg font-Host mt-4  flex items-center justify-center">
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