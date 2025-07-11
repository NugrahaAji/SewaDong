<nav class="w-full top-0 h-20 z-50 flex bg-white fixed shadow-[0px_0px_50px_0px_rgba(0,0,0,0.03)] " x-data="{ isOpen: false }">
        <div class="my-auto grow mx-auto ">
            <div class="flex items-center px-[4.16%]">
                {{-- Logo --}}
            <!-- <img class="h-10 md:h-12  w-auto" src="{{ url('deeptalk/secLogo.png') }}" alt="Logo DTLC"> -->
            <h1 class="font-Host font-extrabold text-[clamp(28px,2vw,32px)] ">SewaDong</h1>
            {{-- nav-link --}}
            <div class="hidden lg:block ml-auto">
                <ul class="flex gap-9 font-Host font-semibold text-[16px]">
                    <li class="font-normal mx-auto my-auto text-center text-regular flex items-center">
                        <a href="/"
                        class="">
                        <img src="{{ url('icon/searchIcon.svg') }}" alt="">
                        </a>
                    </li>
                    <li class="w-24 font-normal mx-auto my-auto text-center text-regular">
                        <a href="/riwayat"
                        class="">
                        Riwayat
                        </a>
                    </li>
                    <li class="w-24 font-normal mx-auto my-auto text-center text-regular">
                        <a href="/beranda"
                        class="">
                        Beranda
                        </a>
                    </li>
                    <li class="w-24 font-normal mx-auto my-auto text-center text-regular">
                        <a href="/kategori-barang"
                        class="">
                        Kategori
                        </a>
                    </li>
                    <li>
                        <a onclick="">
                            <img src="{{ url('icon/profile.svg') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ml-auto lg:hidden">
                <button  @click="isOpen = !isOpen" @click.outside="isOpen = false" class="text-black flex justify-center flex-col items-center lg:hidden">
                    <svg class="size-7" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                        <path fill="#ffffff" fill-rule="evenodd" d="M19.75 12a.75.75 0 0 0-.75-.75H5a.75.75 0 0 0 0 1.5h14a.75.75 0 0 0 .75-.75m0-5a.75.75 0 0 0-.75-.75H5a.75.75 0 0 0 0 1.5h14a.75.75 0 0 0 .75-.75m0 10a.75.75 0 0 0-.75-.75H5a.75.75 0 0 0 0 1.5h14a.75.75 0 0 0 .75-.75" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</nav>