<nav class="fixed z-49 top-0 left-0 w-[340px] h-screen shadow-[0px_12px_50px_0px_rgba(0,0,0,0.03)]">
    <div class="mt-[128px] ml-20 mr-10">
        <ul class="flex flex-col gap-10 font-normal text-base font-host">
            <li class=" hover:text-[#DA0700]">
                <a href="" class="flex gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M14 4h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0M4 7a3 3 0 1 0 6 0a3 3 0 1 0-6 0"/>
                    </svg>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="">
                <div x-data="{ open: false }">
                <button @click="open = !open" class="hover:text-[#DA0700] w-full flex justify-between items-center">
                    <div class="gap-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3">
                        <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2"/>
                        <path d="M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v0a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2m0 9l2 2l4-4"/></g>
                    </svg>
                        <span>Item</span>
                    </div>
                    <span :class="{ 'rotate-90': open }" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    </span>
                </button>
                <div x-ref="content" x-bind:style="open ? 'max-height: ' + $refs.content.scrollHeight + 'px' : 'max-height: 0px'" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <ul class="gap-3 flex-col flex mt-5 ml-[55px]">
                        <li class="hover:text-[#DA0700]">
                            <a href="">Tambah item</a>
                        </li>
                        <li class="hover:text-[#DA0700]">
                            <a href="">Kelola item</a>
                        </li>
                    </ul>
                </div>
                </div>
            </li>
            <li class="">
                <div x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex justify-between items-center hover:text-[#DA0700]">
                    <div class="gap-4 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M11.5 21H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v6M16 3v4M8 3v4m-4 4h16m-5 8l2 2l4-4"/></svg>
                        <span>Pesanan</span>
                    </div>
                    <span :class="{ 'rotate-90': open }" class="transform transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    </span>
                </button>
                <div x-ref="content" x-bind:style="open ? 'max-height: ' + $refs.content.scrollHeight + 'px' : 'max-height: 0px'" class="overflow-hidden transition-all duration-300 ease-in-out">
                    <ul class="gap-3 flex-col flex mt-5 ml-[55px]">
                        <li class="hover:text-[#DA0700]">
                            <a href="">Penerimaan</a>
                        </li>
                        <li class="hover:text-[#DA0700]">
                            <a href="">Pengembalian</a>
                        </li>
                    </ul>
                </div>
                </div>
            </li>
            <li class=" hover:text-[#DA0700]">
                <a href="" class="flex gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"><path d="m17 10l-2-6m-8 6l2-6m2 16H7.244a3 3 0 0 1-2.965-2.544l-1.255-7.152A2 2 0 0 1 5.001 8H19a2 2 0 0 1 1.977 2.304l-.479 2.729"/><path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0-4 0m5 5l2 2l4-4"/></g></svg>
                    <span>Ulasan</span>
                </a>
            </li>
            <li class=" hover:text-[#DA0700]">
                <a href="" class="flex gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3"><path d="M10 8V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2v-2"/><path d="M15 12H3l3-3m0 6l-3-3"/></g></svg>
                    <span>Ulasan</span>
                </a>
            </li>
        </ul>
    </div>
</nav>