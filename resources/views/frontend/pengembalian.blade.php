@extends('layout.structure')
<body class="h-screen font-host">
    @include('include.navbar')
    <section class="mx-40  mt-[112px]">
        <h1 class="text-2xl font-medium">Lengkapi data penyawaan</h1>
        <form action="" class="mt-8">
            <label for="alamat" class="text-base block">Alamat<span class="text-[#d40700]">*</span></label>
            <input type="text" placeholder="No rumah dan nama jalan" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px]">
            <input type="text" placeholder="Deskripsi tambahan" required spellcheck="false" class="h-12 rounded-full px-4 border border-[#989898] mb-4 outline-none w-[940px]">
            <label for="kota" class="text-base block">Kota/Kabupaten<span class="text-[#d40700]">*</span></label>
            <input type="text" placeholder="Kota/Kabupaten" required spellcheck="false" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px]">
            <label for="prov" class="text-base block">Provinsi<span class="text-[#d40700]">*</span></label>
            <input type="text" placeholder="Provinsi" required spellcheck="false" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px]">
            <label for="kodepos" class="text-base block">Kode pos<span class="text-[#d40700]">*</span></label>
            <input type="number" placeholder="Kode pos" required spellcheck="false" class="h-12 rounded-full px-4 border border-[#989898] outline-none mt-2 mb-4 w-[940px] no-spinner">
            <label for="bukti" class="text-base block">Upload foto barang<span class="text-[#d40700]">*</span></label>
            <input type="file" class="block w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-red-100 file:text-[#da0700] hover:file:bg-red-50 cursor-pointer mb-4"/>
            <label for="ulasan" class="text-base block">Berikan ulasan<span class="text-[#d40700]">*</span></label>
            <img src="{{ url('icon/rating.svg') }}" alt="" class="filter grayscale hover:grayscale-0">
            <input type="textarea" placeholder="Ulasanmu" required spellcheck="false" class="h-24 rounded-[4px] px-4 border border-[#989898] outline-none mt-2 mb-20 w-[940px]">
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
                <div class="flex justify-between text-sm font-semibold">
                <span>Total</span>
                <span>Rp. 1.328.000</span>
                </div>

                <!-- Ongkos Kirim -->
                <div class="text-sm space-y-2 border-t pt-3 flex items-center">
                <p>Ongkos kirim:</p>
                <div class="ml-40">
                    <div class="flex items-center">
                        <label class="flex items-center space-x-2">
                        <input type="radio" name="shipping" class="accent-[#da0700]">
                        <span>Keterlambatan</span>
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
                <div class="text-sm space-y-2 border-t pt-3 flex items-center">
                <p>Denda:</p>
                <div class="ml-56">
                    <div class="flex items-center">
                        <span>Keterlambatan</span>
                        <span class="ml-[120px] text-[#da0700] ">Rp. 0</span>
                    </div>
                    <div class="flex items-center mt-3">
                        <span>Lainnya</span>
                        <span class="ml-[165px] text-[#da0700] ">Rp. 0</span>
                    </div>
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
                    <button class="w-full bg-[#da0700] h-[46px] text-white font-semibold py-2 rounded-full">
                        Lakukan pengembalian
                    </button>
                </div>
            </div>
        </form>

    </section>
    @include('include.footer')
</body>