<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinjemDong</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body class="h-[200vh]">
    <!-- Navbar -->
    <nav class="w-full top-0 h-20 z-50 flex bg-gradient-to-r from-[#95BEC4] from-0% via-[#78999E] via-52% to-[#78959D] to-99% text-white sticky" x-data="{ isOpen: false }">
        <!-- Top Navbar  -->
    
        <div class="my-auto grow mx-auto ">
            <div class="flex items-center px-[8.3%]">
                {{-- Logo --}}
            <!-- <img class="h-10 md:h-12  w-auto" src="{{ url('deeptalk/secLogo.png') }}" alt="Logo DTLC"> -->
            <h1 class="drop-shadow-text font-Montserrat font-bold text-[clamp(28px,2vw,32px)]">SewaDong</h1>
            {{-- nav-link --}}
            <div class="hidden lg:block ml-auto">
                <ul class="flex gap-9 font-Montserrat font-semibold text-[16px]">
                    <li class="w-24 mx-auto my-auto text-center drop-shadow-text">
                        <button onclick=""
                        class="">
                        Home
                        </button>
                    </li>
                    <li class="w-24 mx-auto my-auto text-center drop-shadow-text">
                        <button onclick=""
                        class="">
                        Kategori
                        </button>
                    </li>
                    <li class="w-24 mx-auto my-auto text-center drop-shadow-text">
                        <button onclick=""
                                class="">
                                Daftar
                            </button>
                    </li>
                    <li>
                        <button onclick="scrollToSection('biaya')"
                            class="bg-[#F9DAA1] text-black font-Montserrat font-semibold rounded-full w-28 h-8  drop-shadow-button">Masuk
                        </button>
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

        {{-- Bottom navbar (tablet and mobile) --}}
        <div x-show="isOpen"
            class=" fixed bottom-0 right-0 left-0 border-t-[1px] rounded-t-2xl p-4 lg:hidden bg-white bg-opacity-90 backdrop-blur-lg"
            x-transition:enter="transition ease-in-out duration-300" 
            x-transition:enter-start="opacity-0 transform translate-y-full" 
            x-transition:enter-end="opacity-100 transform translate-y-0" 
            x-transition:leave="transition ease-in-out duration-300" 
            x-transition:leave-start="opacity-100 transform translate-y-0" 
            x-transition:leave-end="opacity-0 transform translate-y-full">
            <ul class="container mx-auto flex justify-between px-6 md:px-16 font-Montserrat font-semibold text-[16px]">
                <li>
                    <button onclick="scrollToTop()" class="flex flex-col items-center text-[#2A333C] justify-center ">
                        <svg class="size-7" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 20 20">
                            <path fill="#2a333c" d="M8.998 2.388a1.5 1.5 0 0 1 2.005 0l5.5 4.942A1.5 1.5 0 0 1 17 8.445V15.5a1.5 1.5 0 0 1-1.5 1.5H13a1.5 1.5 0 0 1-1.5-1.5V12a.5.5 0 0 0-.5-.5H9a.5.5 0 0 0-.5.5v3.5A1.5 1.5 0 0 1 7 17H4.5A1.5 1.5 0 0 1 3 15.5V8.445c0-.425.18-.83.498-1.115zm1.336.744a.5.5 0 0 0-.668 0l-5.5 4.942A.5.5 0 0 0 4 8.445V15.5a.5.5 0 0 0 .5.5H7a.5.5 0 0 0 .5-.5V12A1.5 1.5 0 0 1 9 10.5h2a1.5 1.5 0 0 1 1.5 1.5v3.5a.5.5 0 0 0 .5.5h2.5a.5.5 0 0 0 .5-.5V8.445a.5.5 0 0 0-.166-.371z" />
                        </svg>
                        <span class="text-base">Dashboard</span>
                    </button>
                </li>
                <li>
                    <button onclick="scrollToSection('about')" class="flex flex-col justify-center items-center text-[#2A333C] font-normal">
                        <svg class="size-7" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 20 20">
                            <path fill="#2a333c" d="M5 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M10.5 9a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm-.5 3.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5M5.5 9a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm.5 3v-2h2v2zM2 5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v1a2 2 0 0 1 2 2v5.5a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 2 13.5zm13 0a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8.5A1.5 1.5 0 0 0 4.5 15h11a1.5 1.5 0 0 0 1.5-1.5V8a1 1 0 0 0-1-1v6.5a.5.5 0 0 1-1 0z" />
                        </svg>
                        <span class="text-base">About</span>
                    </button>
                </li>
                <li>
                    <button onclick="scrollToSection('faq')" class="flex flex-col justify-center items-center text-[#2A333C] font-normal">
                        <svg class="size-7" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 28 28">
                            <path fill="#2a333c" d="M3.5 12a7.5 7.5 0 1 1 3.91 6.586a.75.75 0 0 0-.555-.066l-3.25.87l.872-3.252a.75.75 0 0 0-.066-.553A7.46 7.46 0 0 1 3.5 12M11 3a9 9 0 0 0-8.048 13.032l-.908 3.389a1.25 1.25 0 0 0 1.53 1.53l3.387-.906A9 9 0 1 0 11 3m6 22a8.98 8.98 0 0 1-6.732-3.026a10 10 0 0 0 2.109-.068A7.47 7.47 0 0 0 17 23.5a7.46 7.46 0 0 0 3.59-.914a.75.75 0 0 1 .555-.066l3.25.87l-.872-3.252a.75.75 0 0 1 .066-.553A7.5 7.5 0 0 0 24.5 16a7.5 7.5 0 0 0-3.825-6.54a10 10 0 0 0-.75-1.974a9.004 9.004 0 0 1 5.123 12.547l.908 3.388a1.25 1.25 0 0 1-1.531 1.53l-3.386-.906A9 9 0 0 1 17 25" />
                        </svg>
                        <span class="text-base">FAQ</span>
                    </button>
                </li>
                <li>
                    <button onclick="scrollToSection('footer')" class="flex flex-col justify-center items-center text-[#2A333C] font-normal">
                        <svg class="size-7" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 28 28">
                            <path fill="#2a333c" d="M15 11.75a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 0 1.5h-5.5a.75.75 0 0 1-.75-.75m.75 3.25a.75.75 0 0 0 0 1.5h5.5a.75.75 0 0 0 0-1.5zm-4.5-3.25a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0M7 14.5h5a1 1 0 0 1 1 1v.5s-.5 2.5-3.5 2.5S6 16 6 16v-.5a1 1 0 0 1 1-1M2.004 6.75A2.75 2.75 0 0 1 4.754 4H23.25A2.75 2.75 0 0 1 26 6.75v14.5A2.75 2.75 0 0 1 23.25 24H4.755a2.75 2.75 0 0 1-2.75-2.75zm2.75-1.25c-.69 0-1.25.56-1.25 1.25v14.5c0 .69.56 1.25 1.25 1.25H23.25c.69 0 1.25-.56 1.25-1.25V6.75c0-.69-.56-1.25-1.25-1.25z" />
                        </svg>
                        <span class="text-base">Contact</span>
                    </button>
                </li>
            </ul>
        </div>
        <!-- <div class="bg-white bg-opacity-90 backdrop-blur-lg grow"></div> -->
        
    </nav>

    <div class="h-[648px] bg-gradient-to-r from-[#95BEC4] from-0% via-[#78999E] via-52% to-[#78959D] to-99% z-1">
        <h1 class="font-Montserrat font-bold text-[clamp(36px,4.1vw,72px)] mx-auto pt-[232px] text-white text-center w-[clamp(380px,36.46vw,684px)] -tracking-wide [text-shadow:_6px_2px_31px_rgb(0_0_0_/_0.40)] leading-[105%]">Temukan yang kamu butuhkan.</h1>
        <div class="flex justify-center pt-[clamp(24px,2.6vw,42px)]">
            <div class="relative">
                <input type="text" placeholder="Mau sewa apa?" class="h-[clamp(40px,3.15vw,56px)] w-[clamp(330px,37.5vw,700px)] bg-white rounded-full drop-shadow-button focus:outline-none focus:ring-0 font-Nunito pl-[27px] text-[clamp(14px,1.04vw,18px)] ">
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2  rounded-full h-[clamp(40px,3.15vw,56px)] w-[clamp(40px,3.65vw,61px)] focus:outline-none bg-white">
                <div class="w-[clamp(28px,2.1vw,36px)]">
                    <img src="{{ asset('icon/searchIcon.png') }}" alt="" class=="w-[28px] flex transform translate-y-1/2">
                </div>    
                </button>

            </div>
        </div>
    </div>
</body>
</html>