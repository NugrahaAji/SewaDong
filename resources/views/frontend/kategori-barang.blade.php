@extends('layout.structure')

<body class="h-[200vh]">
    @include('include.navbar')
    <header class="flex-col justify-between fixed w-full shadow-[0px_0px_50px_0px_rgba(0,0,0,0.03)] z-100 top-20 bg-white pb-1">
        <div class="flex justify-center my-4">
            <ul class="font-Host text-lg font-normal flex gap-12 text-[#989898]">
                <li class="hover:text-[#070707] text-[#070707]"><a href="/kategori-barang">Barang</a></li>
                <li class="hover:text-[#070707]"><a href="/kategori-jasa">Jasa</a></li>
            </ul>
        </div>
        <div class="h-[0.7px] bg-[linear-gradient(90deg,rgba(216,216,216,0)_0%,#D8D8D8_50%,rgba(216,216,216,0)_100%)] mt-[28px]"></div>
        <div class="flex justify-between mx-40 mt-[14px]">
            <ul class="flex gap-[26px]">
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/all.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/kantor.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/dapur.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/laptop.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/kamera.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/drone.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/audio.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/hp.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/kemah.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/pancing.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/tari.svg') }}" ></button></li>
                <li><button class="opacity-45 hover:opacity-100 focus:opacity-100"><img src="{{ url('icon/renang.svg') }}" ></button></li>
            </ul>
            <div class="font-normal font-host">
                <label for="search">
                    <img src="{{ url('icon/searchiconmini.svg') }}" alt="" class="absolute flex mt-2 ml-[5px]">
                </label>
                <input type="search" class="w-[200px] h-[46px] text-base border border-[#D8D8D8] rounded-full outline-none pl-9 pr-3" placeholder="temukan barang" spellcheck="false">
            </div>
        </div>
    </header>
    <section class="mt-[260px]">
        <div class="mx-40 mt-8">
                <ul class="grid grid-cols-6 gap-x-[39px] gap-y-5 font-Host text-lg font-medium">
                    @for($i = 0; $i < 14; $i++)
                    <li class="h-full w-full rounded-[20px] border border-[#D8D8D8]">
                        <a href="/detail">
                            <div class="h-[218px] w-[218px] grow rounded-2xl overflow-hidden mt-[6px] mx-auto">
                                <img src="{{ url('icon/pict.svg') }}" alt="">
                            </div>
                            <div class="px-2 pb-3 pt-2">
                                <h1>Nama Produk</h1>
                                <img src="{{ url('icon/rating.svg') }}" alt="">
                                <h1 class="text-base font-normal font-host pb-10 mt-1">Rp. 200.000 <span class="text-[#989898] text-sm">/hari</span></h1>
                            </div>
                        </a>
                    </li>
                    @endfor
                </ul>
            </div>
    </section>
    @include('include.footer')
</body>