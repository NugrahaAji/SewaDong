@extends('layout.structure')
<body class="h-screen font-host">
    @include('include.navbar')
    <section class="mx-40  mt-[112px]">
        <h1 class="text-2xl font-medium">Lengkapi data penyawaan</h1>
        <form action="" class="mt-8">
            <label for="alamat" class="text-base block">Alamat<span class="text-[#d40700]">*</span></label>
            <input type="text" required spellcheck="false" placeholder="No rumah dan nama jalan" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px]">
            <input type="text" required spellcheck="false" placeholder="Deskripsi tambahan" class="h-12 rounded-full px-4 border border-[#989898] mb-4 outline-none w-[940px]">
            <label for="kota" class="text-base block">Kota/Kabupaten<span class="text-[#d40700]">*</span></label>
            <input type="text" required spellcheck="false" placeholder="Kota/Kabupaten" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px]">
            <label for="prov" class="text-base block">Provinsi<span class="text-[#d40700]">*</span></label>
            <input type="text" required spellcheck="false" placeholder="Provinsi" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px]">
            <label for="kodepos" class="text-base block">Kode pos<span class="text-[#d40700]">*</span></label>
            <input type="number" required spellcheck="false" placeholder="Kode pos" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-40 w-[940px] no-spinner">
            <div class="w-[576px] mx-auto bg-white rounded-md border p-6 space-y-4  absolute top-[114px] right-40">
                <h2 class="font-semibold">Pesananmu</h2>

                <!-- Produk -->
                <div class="flex justify-between text-sm border-b pb-2">
                <span>Produk</span>
                <span>Biaya</span>
                </div>
                <div class="flex justify-between text-sm">
                <span>Printer Epson x 1 (1 Hari)</span>
                <span>Rp. 1.328.000</span>
                </div>
                <div class="flex justify-between text-sm font-semibold border-b pb-2">
                <span>Total</span>
                <span>Rp. 1.328.000</span>
                </div>

                <!-- Metode Pembayaran -->
                <div class="flex justify-between">
                <p class="text-sm mb-1">Metode Pembayaran</p>
                <p class="text-sm text-[#da0700] font-medium">Pilih Metode Pembayaran</p>
                </div>

                <!-- Ongkos Kirim -->
                <div class="text-sm space-y-2 border-t pt-3 flex items-center">
                <p>Ongkos kirim:</p>
                <div class="ml-40">
                    <div class="flex items-center">
                        <label class="flex items-center space-x-2">
                        <input type="radio" name="shipping" class="accent-[#da0700]">
                        <span>Ambil di tempat</span>
                        </label>
                        <span class="ml-[120px]">Rp. 0</span>
                    </div>
                    <div class="flex items-center mt-3">
                        <label class="flex items-center space-x-2">
                        <input type="radio" name="shipping" class="accent-[#da0700]">
                        <span>Diantar ke alamat</span>
                        </label>
                        <span class="ml-auto">Rp. 15.000</span>
                    </div>
                </div>
                </div>

                <!-- Ringkasan -->
                <div class="text-sm space-y-1 border-t pt-3">
                <div class="flex justify-between">
                    <span>Total Produk</span>
                    <span>Rp. 1.328.000</span>
                </div>
                <div class="flex justify-between">
                    <span>Biaya Pengiriman</span>
                    <span>Rp. 15.000</span>
                </div>
                <div class="flex justify-between">
                    <span>Biaya Layanan</span>
                    <span>Rp. 2.500</span>
                </div>
                <div class="flex justify-between font-semibold">
                    <span>Total Pembayaran</span>
                    <span>Rp. 1.345.000</span>
                </div>
                </div>

                <!-- Checkbox -->
                 <div class="my-7">
                     <label class="flex items-start space-x-2 text-sm mt-7 mb-9">
                     <input type="checkbox" class="mt-1 accent-[#da0700]">
                     <span>
                         Saya sudah membaca dan setuju dengan 
                         <a href="#" class="text-[#da0700] font-medium underline">Syarat dan Ketentuan</a> 
                         yang ada <span class="text-[#da0700]">*</span>
                     </span>
                     </label>
                 </div>

                <!-- Tombol -->
                <div class="space-y-6 mt-4">
                    <a href="/pembayaran-scan" class="flex items-center justify-center w-full bg-[#da0700] h-[46px] text-white font-semibold py-2 rounded-full">
                        Lakukan Pembayaran
                    </a>
                    <a href="/beranda" class="flex items-center justify-center w-full border border-black h-[46px] font-normal py-2 rounded-full mt-8">
                        Batalkan Pesanan
                    </a>
                </div>
            </div>
        </form>

    </section>
    @include('include.footer')
</body>