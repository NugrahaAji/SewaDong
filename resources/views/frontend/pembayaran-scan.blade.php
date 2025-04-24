@extends('layout.structure')
<body class="h-fit font-host">
    @include('include.navbar')
    <section class="mx-40  mt-[112px]">
        <div class="w-[1234px]">
            <img src="{{ url('icon/qr.svg') }}" alt="">
            <div class="flex justify-center mt-5">
                <a href="/riwayat" class="bg-[#DA0700] w-44 h-[46px] rounded-full text-white font-bold text-lg font-Host  flex items-center justify-center">
                    Oke
                </a>
            </div>
        </div>        
        <div class="absolute top-[114px] right-40 rounded-md scale-75">
            <img src="{{ url('icon/iklanmini.svg') }}" alt="">
        </div>
    </section>
    @include('include.footer')
</body>