@extends('layout.structure')
<body class="h-fit font-host">
    @include('include.navbar')
    <section class="mx-40 mt-[112px]">
        <div class="flex py-6" x-data="{activeSlide: 0,images: ['{{ url('icon/pict.svg') }}','{{ url('icon/photo.svg') }}','{{ url('icon/video.svg') }}']}">
        <!-- SLIDER -->
        <div class="flex flex-col items-center">
            <!-- Gambar Utama -->
            <div class="w-[600px] h-[600px] rounded-2xl overflow-hidden shadow-md">
                <img :src="images[activeSlide]" class="w-full h-full object-cover transition duration-300 ease-in-out" />
            </div>

            <!-- Thumbnail -->
            <div class="flex gap-3 mt-4">
                <template x-for="(img, index) in images" :key="index">
                    <button @click="activeSlide = index"
                            class="w-16 h-16 border-2 rounded-[4px] overflow-hidden"
                            :class="activeSlide === index ? 'border-blue-500' : 'border-transparent'">
                        <img :src="img" class="w-full h-full object-cover" />
                    </button>
                </template>
            </div>
        </div>

        <!-- DESKRIPSI -->
        <div class="ml-20 w-full">
            <div class="flex items-center gap-5">
                <a href="/beranda">
                    <img src="{{ url('icon/back.svg') }}" alt="">
                </a>
                <div>
                    <h1 class="text-[38px] font-Host font-semibold">Nama Produk</h1>
                    <div class="flex items-center gap-5">
                        <img src="{{ url('icon/rating.svg') }}" alt="" class="inline"> <span class="text-base font-Host">5.0</span>
                    </div>
                </div>
            </div>
            <div class="h-[0.7px] bg-[linear-gradient(90deg,rgba(216,216,216,0)_0%,#D8D8D8_50%,rgba(216,216,216,0)_100%)] mt-[28px]"></div>
            <div >
                <p class="text-lg font-Host font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit esse tempora culpa eveniet unde vero repellendus magnam commodi, nobis, ipsum illum rerum modi sunt iste amet iusto voluptatibus doloremque quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui dolorum optio beatae vitae nisi incidunt? Beatae, at. Et illum numquam laboriosam dicta magnam aliquid at aperiam expedita commodi eius!</p>
            </div>
            <div>
                <div class="font-Host font-normal flex align-text-top mt-4">
                    <span class="text-[#da0700] mt-2">Rp.</span><span class="text-[42px] ">xxxxx</span><span class="text-[#989898] text-xl flex items-end mb-3 ml-2">/hari</span>
                </div>
                <span class="text-base font-Host font-normal py-4">Deposit</span>
                <div class="font-Host font-normal flex align-text-top">
                    <span class="text-[#da0700] mt-2">Rp.</span><span class="text-[42px] ">xxxxx</span>
                </div>
                <span class="text-base font-Host font-normal py-4">Stock: <span class="text-[#da0700]">3</span></span>
            </div>
            <div class="flex gap-8 mt-4 items-center">
                <div>
                    <span class="text-sm">Jumlah Barang</span>
                    <div x-data="{ count: 0 }" class="flex items-center border font-Host font-thin rounded-lg overflow-hidden w-32 justify-between text-xl">
                        <button @click="count > 0 ? count-- : count" class="w-10 h-10 flex justify-center items-center border-r hover:bg-gray-200">-</button>
                        <span class="w-10 text-center" x-text="count"></span>
                        <button @click="count++" class="w-10 h-10 flex justify-center items-center border-l hover:bg-gray-200">+</button>
                    </div>
                </div>
                <div>
                    <span class="text-sm">Jumlah Hari</span>
                    <div x-data="{ count: 0 }" class="flex items-center border font-Host font-thin rounded-lg overflow-hidden w-32 justify-between text-xl">
                        <button @click="count > 0 ? count-- : count" class="w-10 h-10 flex justify-center items-center border-r hover:bg-gray-200">-</button>
                        <span class="w-10 text-center" x-text="count"></span>
                        <button @click="count++" class="w-10 h-10 flex justify-center items-center border-l hover:bg-gray-200">+</button>
                    </div>
                </div>
                <div>
                    <a href="/pembayaran" class="flex items-center justify-center rounded-full h-[46px] w-[132px] bg-[#da0700] font-semibold text-lg text-white">
                        Sewa
                    </a>
                </div>
            </div>
            <div class="mt-4 gap-4 flex-col flex">
                <div class="flex items-center gap-4 border-gray-200 rounded-[4px] border p-3">
                    <img src="{{ url('icon/card.svg') }}" alt=""><p class="font-medium text-sm"><span class="font-bold">Pembayaran.</span> Pembayaran dilakukan secara aman melalui verifikasi bertahap dengan roll penyedia dan penyedia. Dan semuanya aman terkendali.</p>
                </div>
                <div class="flex items-center gap-4 border-gray-200 rounded-[4px] border p-3">
                    <img src="{{ url('icon/sk.svg') }}" alt=""><p class="font-medium text-sm"><span class="font-bold">Syarat dan Ketentuan.</span> Barang yang sudah di sewakan menjadi tanggung jawab penyewa. Segala bentuk ketentuan diatur oleh penyedia barang dan penyewa sudah menyetujuinya sebelum menyewa.</p>
                </div>

            </div>
        </div>
    </section>
    <section class="mx-40 ">
        <div x-data="{ tab: 'ulasan' }" class="w-full mx-auto bg-white">
            <!-- Tabs -->
            <div class="flex border-b mb-4">
                <button 
                    class="px-4 py-2 font-semibold"
                    :class="tab === 'sk' ? 'border-b-2 border-[#da0700] text-[#070707]' : 'text-[#989898]'" 
                    @click="tab = 'sk'">S & K
                </button>
                <button 
                    class="ml-4 px-4 py-2 font-semibold"
                    :class="tab === 'ulasan' ? 'border-b-2 border-[#da0700] text-[#070707]' : 'text-[#989898]'" 
                    @click="tab = 'ulasan'">Ulasan
                </button>
            </div>

            <!-- Content -->
            <div x-show="tab === 'sk'" x-transition>
                <p class="text-lg">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum sequi quasi dolore voluptatum et reiciendis illum, ipsa nesciunt officia vitae impedit blanditiis eaque reprehenderit odit architecto accusantium? Ad, soluta in?
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum cum molestiae soluta, aliquid deserunt qui facere maiores recusandae tenetur saepe placeat, eum quaerat doloribus, eos quam adipisci nisi dolor et.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quidem dolor id corrupti ipsum doloribus a perspiciatis, asperiores aut provident expedita vero magnam. Numquam molestias est saepe, eos in dolorum!
                </p>
            </div>

            <div x-show="tab === 'ulasan'" x-transition>
            <table class="bg-white rounded">
      <thead class="">
        <tr>
          <th class="text-left px-6 py-3 text-base font-semibold w-[230px]">Nama Item</th>
          <th class="text-left px-6 py-3 text-base font-semibold w-[180px]">Order ID</th>
          <th class="text-left px-6 py-3 text-base font-semibold w-[195px]">Nama Penyewa</th>
          <th class="text-left px-6 py-3 text-base font-semibold w-[120px]">Rating</th>
          <th class="text-left px-6 py-3 text-base font-semibold w-[860px]">Komentar</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 text-base">
        <tr>
          <td class="px-6 py-4 font-medium ">Nama Item</td>
          <td class="px-6 py-4">0xxxx</td>
          <td class="px-6 py-4">Nama penyewa</td>
          <td class="px-6 py-4">4/5</td>
          <td class="px-6 py-4 font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptate voluptatibus dolores, porro veniam nulla deleniti. Hic, cumque repudiandae quasi unde ab sapiente minus similique iste tempora atque expedita harum?</td>
        </tr>
        <tr>
          <td class="px-6 py-4 font-medium ">Nama Item</td>
          <td class="px-6 py-4">0xxxx</td>
          <td class="px-6 py-4">Nama penyewa</td>
          <td class="px-6 py-4">4/5</td>
          <td class="px-6 py-4 font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex vel minus aliquam obcaecati tenetur dignissimos nesciunt, veritatis velit nisi quis iusto. Veritatis, maxime voluptatem. Dolorem assumenda quae recusandae necessitatibus et.</td>
        </tr>
        <tr>
          <td class="px-6 py-4 font-medium ">Nama Item</td>
          <td class="px-6 py-4">0xxxx</td>
          <td class="px-6 py-4">Nama penyewa</td>
          <td class="px-6 py-4">4/5</td>
          <td class="px-6 py-4 font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex vel minus aliquam obcaecati tenetur dignissimos nesciunt, veritatis velit nisi quis iusto. Veritatis, maxime voluptatem. Dolorem assumenda quae recusandae necessitatibus et.</td>
        </tr>
        <tr>
          <td class="px-6 py-4 font-medium ">Nama Item</td>
          <td class="px-6 py-4">0xxxx</td>
          <td class="px-6 py-4">Nama penyewa</td>
          <td class="px-6 py-4">4/5</td>
          <td class="px-6 py-4 font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex vel minus aliquam obcaecati tenetur dignissimos nesciunt, veritatis velit nisi quis iusto. Veritatis, maxime voluptatem. Dolorem assumenda quae recusandae necessitatibus et.</td>
        </tr>
        <tr>
          <td class="px-6 py-4 font-medium ">Nama Item</td>
          <td class="px-6 py-4">0xxxx</td>
          <td class="px-6 py-4">Nama penyewa</td>
          <td class="px-6 py-4">4/5</td>
          <td class="px-6 py-4 font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex vel minus aliquam obcaecati tenetur dignissimos nesciunt, veritatis velit nisi quis iusto. Veritatis, maxime voluptatem. Dolorem assumenda quae recusandae necessitatibus et.</td>
        </tr>
        <tr>
          <td class="px-6 py-4 font-medium ">Nama Item</td>
          <td class="px-6 py-4">0xxxx</td>
          <td class="px-6 py-4">Nama penyewa</td>
          <td class="px-6 py-4">4/5</td>
          <td class="px-6 py-4 font-medium">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex vel minus aliquam obcaecati tenetur dignissimos nesciunt, veritatis velit nisi quis iusto. Veritatis, maxime voluptatem. Dolorem assumenda quae recusandae necessitatibus et.</td>
        </tr>
      </tbody>
    </table>

            </div>
        </div>
    </section>
    @include('include.footer')
</body>