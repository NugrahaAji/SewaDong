@extends('layout.structure')
<body class="h-fit font-host">
    @include('include.navbar')
    <section class="mx-40  mt-[112px]">
        <h1 class="font-medium text-2xl pb-[45px]">Riwayat Penyewaan</h1>
        
        <!-- card -->
         <menu class="gap-5">
         <div class="grow w-[1096px] h-[260px] border border-gray-200 rounded-[4px] flex items-center mb-5">
                <div class="ml-[26px]">
                    <img src="{{ url('icon/pict.svg') }}" alt="" class="h-[220px] rounded-2xl">
                </div>
                <div class="ml-8">
                    <h1 class="text-[38px] font-semibold">
                        Nama produk
                    </h1>
                    <p class="text-[#989898] text-base">1 unit - 1 hari</p>
                    <div class="font-Host font-normal flex align-text-top my-3">
                        <span class="text-[#da0700] mt-1 text-xs">Rp.</span><span class="text-2xl ">200.000</span>
                    </div>
                    <a href="/pembayaran"class="bg-[#DA0700] text-white font-Host font-semibold rounded-full w-[237px] h-11  drop-shadow-a  flex items-center justify-center">
                        Lakukan pembayaran
                    </a>
                    <p class="text-[#989898] text-sm mt-2">Barang belum dibayar</p>
                </div>
            </div>

            <div class="grow w-[1096px] h-[260px] border border-gray-200 rounded-[4px] flex items-center mb-5">
                <div class="ml-[26px]">
                    <img src="{{ url('icon/pict.svg') }}" alt="" class="h-[220px] rounded-2xl">
                </div>
                <div class="ml-8">
                    <h1 class="text-[38px] font-semibold">
                        Nama produk
                    </h1>
                    <p class="text-[#989898] text-base">1 unit - 1 hari</p>
                    <div class="font-Host font-normal flex align-text-top my-3">
                        <span class="text-[#da0700] mt-1 text-xs">Rp.</span><span class="text-2xl ">200.000</span>
                    </div>
                    <a href="/pengembalian"class="bg-[#DA0700] text-white font-Host font-semibold rounded-full w-[237px] h-11  drop-shadow-a  flex items-center justify-center">
                        Proses pengembalian
                    </a>
                    <p class="text-[#989898] text-sm mt-2">Menunggu konfirmasi</p>
                </div>
            </div>

            <div class="grow w-[1096px] h-[260px] border border-gray-200 rounded-[4px] flex items-center mb-5">
                <div class="ml-[26px]">
                    <img src="{{ url('icon/pict.svg') }}" alt="" class="h-[220px] rounded-2xl">
                </div>
                <div class="ml-8">
                    <h1 class="text-[38px] font-semibold">
                        Nama produk
                    </h1>
                    <p class="text-[#989898] text-base">1 unit - 1 hari</p>
                    <div class="font-Host font-normal flex align-text-top my-3">
                        <span class="text-[#da0700] mt-1 text-xs">Rp.</span><span class="text-2xl ">200.000</span>
                    </div>
                    <a href="/riwayat"class="border border-gray-200 font-Host font-normal rounded-full w-[237px] h-11 drop-shadow-a  flex items-center justify-center">
                        Pembayaran telah dibatalkan
                    </a>
                    <p class="text-[#989898] text-sm mt-2">Dibatalkan</p>
                </div>
            </div>
            <div class="absolute top-[114px] right-40 rounded-md">
                <img src="{{ url('icon/iklan.svg') }}" alt="">
            </div>
         </menu>
    </section>
    @include('include.footer')
</body>