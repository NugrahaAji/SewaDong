<nav class="w-full top-0 h-20 z-50 flex bg-white text-[#433F3F] fixed shadow-[0px_0px_50px_0px_rgba(0,0,0,0.03)] " x-data="{ isOpen: false }">
        <div class="my-auto grow mx-auto ">
            <div class="flex items-center px-[4.16%]">
            <h1 class="drop-shadow-text font-Host font-extrabold text-[clamp(28px,2vw,32px)] ">SewaDong</h1>
            {{-- nav-link --}}
            <div class="hidden lg:block ml-auto">
                <ul class="flex gap-9 font-Host font-semibold text-[16px]">
                    <li class="w-24 font-normal text-[#2c2c2c] mx-auto my-auto text-center text-regular">
                        <a href="/beranda"
                        class="">
                        Beranda
                        </a>
                    </li>
                    <li class="w-24 font-normal text-[#2c2c2c] mx-auto my-auto text-center text-regular">
                        <a href="/kategori"
                        class="">
                        Kategori
                        </a>
                    </li>
                    <li class="w-24 font-normal text-[#2c2c2c] mx-auto my-auto text-center text-regular">
                        <a href="/signin"
                        class="">
                        Daftar
                        </a>
                    </li>
                    <li>
                        <a href="/login"
                            class="bg-[#DA0700] text-white font-Host font-semibold rounded-full w-28 h-8  drop-shadow-a  flex items-center justify-center">Masuk
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