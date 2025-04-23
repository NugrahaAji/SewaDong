<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewaDong</title>

    <!-- Tailwind -->
    @vite('resources/css/app.css')

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

</head>
<body class="h-[200vh] absolute">
    <div class="-z-1">
        <img src="{{asset('image/hero.svg')}}" alt="">
        <h1 class="text-[88px] font-Host font-extrabold z-1 relative -top-96">Temukan yang<br>kamu butuhkan.</h1>
    </div>
    <div>
        <h1></h1>
    </div>
    <!-- Navbar -->
    @

    <div class="bg-white rounded-t-[50px] w-full h-[200vh] z-0 top-[577px] absolute shadow-[0px_0px_100px_0px_rgba(0,0,0,0.25)] flex">
        <div class="mx-auto mt-[18px] px-20 w-full">
            <ul class="flex gap-12 justify-center pb-4">
                <li class="font-Host font-normal text-lg text-[#2C2C2C]"><a href="">Barang</a></li>
                <li class="font-Host font-normal text-lg text-[#989898]"><a href="">Jasa</a></li>
            </ul>
            <hr class="w-full h-[2px] border-0 bg-gradient-to-r from-transparent via-[#D8D8D8] to-transparent">
            <div class="flex justify-between items-center">
                <ul class="flex mt-4">
                    <li>
                        <button class="font-Host text-[#2c2c2c] text-[12px] font-normal text-center w-[100px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M22.6667 22.6667H25.3333C26.0406 22.6667 26.7189 22.3857 27.219 21.8856C27.719 21.3855 28 20.7072 28 20V14.6667C28 13.9594 27.719 13.2811 27.219 12.781C26.7189 12.281 26.0406 12 25.3333 12H6.66667C5.95942 12 5.28115 12.281 4.78105 12.781C4.28095 13.2811 4 13.9594 4 14.6667V20C4 20.7072 4.28095 21.3855 4.78105 21.8856C5.28115 22.3857 5.95942 22.6667 6.66667 22.6667H9.33333M22.6667 12V6.66667C22.6667 5.95942 22.3857 5.28115 21.8856 4.78105C21.3855 4.28095 20.7072 4 20 4H12C11.2928 4 10.6145 4.28095 10.1144 4.78105C9.61428 5.28115 9.33333 5.95942 9.33333 6.66667V12" stroke="#2C2C2C" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.3335 20C9.3335 19.2928 9.61445 18.6145 10.1145 18.1144C10.6146 17.6143 11.2929 17.3334 12.0002 17.3334H20.0002C20.7074 17.3334 21.3857 17.6143 21.8858 18.1144C22.3859 18.6145 22.6668 19.2928 22.6668 20V25.3334C22.6668 26.0406 22.3859 26.7189 21.8858 27.219C21.3857 27.7191 20.7074 28 20.0002 28H12.0002C11.2929 28 10.6146 27.7191 10.1145 27.219C9.61445 26.7189 9.3335 26.0406 9.3335 25.3334V20Z" stroke="#2C2C2C" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Alat kantor</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M20 8V24M24 16H24.0133M24 20H24.0133M24 12H24.0133M4 9.33333C4 8.97971 4.14048 8.64057 4.39052 8.39052C4.64057 8.14048 4.97971 8 5.33333 8H26.6667C27.0203 8 27.3594 8.14048 27.6095 8.39052C27.8595 8.64057 28 8.97971 28 9.33333V22.6667C28 23.0203 27.8595 23.3594 27.6095 23.6095C27.3594 23.8595 27.0203 24 26.6667 24H5.33333C4.97971 24 4.64057 23.8595 4.39052 23.6095C4.14048 23.3594 4 23.0203 4 22.6667V9.33333Z" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.6665 14C9.99984 13.1107 10.6665 13.1107 11.9998 14C13.1105 14.4627 14.2225 15.2347 15.3332 14M8.6665 18C9.99984 17.1107 10.6665 17.1107 11.9998 18C13.1105 18.4627 14.2225 19.2347 15.3332 18" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p>Alat dapur</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M4 25.3333H28M6.66667 9.33333C6.66667 8.97971 6.80714 8.64057 7.05719 8.39052C7.30724 8.14048 7.64638 8 8 8H24C24.3536 8 24.6928 8.14048 24.9428 8.39052C25.1929 8.64057 25.3333 8.97971 25.3333 9.33333V20C25.3333 20.3536 25.1929 20.6928 24.9428 20.9428C24.6928 21.1929 24.3536 21.3333 24 21.3333H8C7.64638 21.3333 7.30724 21.1929 7.05719 20.9428C6.80714 20.6928 6.66667 20.3536 6.66667 20V9.33333Z" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p>Laptop</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M6.66667 9.33334H8C8.70724 9.33334 9.38552 9.05239 9.88562 8.5523C10.3857 8.0522 10.6667 7.37392 10.6667 6.66668C10.6667 6.31305 10.8071 5.97392 11.0572 5.72387C11.3072 5.47382 11.6464 5.33334 12 5.33334H20C20.3536 5.33334 20.6928 5.47382 20.9428 5.72387C21.1929 5.97392 21.3333 6.31305 21.3333 6.66668C21.3333 7.37392 21.6143 8.0522 22.1144 8.5523C22.6145 9.05239 23.2928 9.33334 24 9.33334H25.3333C26.0406 9.33334 26.7189 9.6143 27.219 10.1144C27.719 10.6145 28 11.2928 28 12V24C28 24.7073 27.719 25.3855 27.219 25.8856C26.7189 26.3857 26.0406 26.6667 25.3333 26.6667H6.66667C5.95942 26.6667 5.28115 26.3857 4.78105 25.8856C4.28095 25.3855 4 24.7073 4 24V12C4 11.2928 4.28095 10.6145 4.78105 10.1144C5.28115 9.6143 5.95942 9.33334 6.66667 9.33334Z" stroke="#989898" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 17.3333C12 18.3942 12.4214 19.4116 13.1716 20.1618C13.9217 20.9119 14.9391 21.3333 16 21.3333C17.0609 21.3333 18.0783 20.9119 18.8284 20.1618C19.5786 19.4116 20 18.3942 20 17.3333C20 16.2725 19.5786 15.2551 18.8284 14.5049C18.0783 13.7548 17.0609 13.3333 16 13.3333C14.9391 13.3333 13.9217 13.7548 13.1716 14.5049C12.4214 15.2551 12 16.2725 12 17.3333Z" stroke="#989898" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p>Kamera</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M13.3334 13.3333H18.6667M13.3334 13.3333V18.6667M13.3334 13.3333L8.66671 8.66667M18.6667 13.3333V18.6667M18.6667 13.3333L23.3334 8.66667M18.6667 18.6667H13.3334M18.6667 18.6667L23.3334 23.3333M13.3334 18.6667L8.66671 23.3333M13.28 8.00001C13.1574 7.1421 12.7983 6.33528 12.243 5.66995C11.6877 5.00462 10.9581 4.50707 10.1359 4.23305C9.31373 3.95903 8.4315 3.91935 7.58806 4.11848C6.74462 4.3176 5.97329 4.74766 5.36049 5.36046C4.74769 5.97326 4.31763 6.74459 4.11851 7.58803C3.91938 8.43147 3.95906 9.3137 4.23308 10.1359C4.5071 10.958 5.00465 11.6877 5.66998 12.243C6.33531 12.7983 7.14213 13.1574 8.00004 13.28M24 13.28C24.8579 13.1574 25.6648 12.7983 26.3301 12.243C26.9954 11.6877 27.493 10.958 27.767 10.1359C28.041 9.3137 28.0807 8.43147 27.8816 7.58803C27.6824 6.74459 27.2524 5.97326 26.6396 5.36046C26.0268 4.74766 25.2555 4.3176 24.412 4.11848C23.5686 3.91935 22.6863 3.95903 21.8642 4.23305C21.042 4.50707 20.3124 5.00462 19.7571 5.66995C19.2017 6.33528 18.8427 7.1421 18.72 8.00001M18.72 24C18.8427 24.8579 19.2017 25.6647 19.7571 26.3301C20.3124 26.9954 21.042 27.4929 21.8642 27.767C22.6863 28.041 23.5686 28.0807 24.412 27.8815C25.2555 27.6824 26.0268 27.2524 26.6396 26.6396C27.2524 26.0268 27.6824 25.2554 27.8816 24.412C28.0807 23.5685 28.041 22.6863 27.767 21.8641C27.493 21.042 26.9954 20.3124 26.3301 19.757C25.6648 19.2017 24.8579 18.8426 24 18.72M8.00004 18.72C7.14213 18.8426 6.33531 19.2017 5.66998 19.757C5.00465 20.3124 4.5071 21.042 4.23308 21.8641C3.95906 22.6863 3.91938 23.5685 4.11851 24.412C4.31763 25.2554 4.74769 26.0268 5.36049 26.6396C5.97329 27.2524 6.74462 27.6824 7.58806 27.8815C8.4315 28.0807 9.31373 28.041 10.1359 27.767C10.9581 27.4929 11.6877 26.9954 12.243 26.3301C12.7983 25.6647 13.1574 24.8579 13.28 24" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Drone</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M6.66667 28H18.6667M13.3333 28L4 17.3333L15.3333 10" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.3335 18.6667C14.4695 15.8027 14.4695 10.864 17.3335 8.00002C20.1175 5.21602 25.1229 5.37069 28.0002 8.00002L17.3335 18.6667Z" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.6562 10.0987L14.1149 8.55734C13.6147 8.05732 13.3336 7.37908 13.3335 6.67181C13.3334 5.96455 13.6142 5.28621 14.1142 4.78601C14.6143 4.28581 15.2925 4.00473 15.9998 4.00461C16.707 4.00448 17.3854 4.28532 17.8856 4.78534L19.4109 6.31068M20.6669 16L20.9442 16.3653C21.5751 16.99 22.4271 17.3404 23.3149 17.3404C24.2027 17.3404 25.0547 16.99 25.6856 16.3653C26.9376 15.1213 26.9922 13.1387 25.8482 11.832L25.3602 11.34" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Lampu</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M20.0001 17.2C21.4042 17.4857 22.863 17.3115 24.1603 16.703C25.4576 16.0946 26.5244 15.0844 27.2025 13.8221C27.8806 12.5598 28.1339 11.1126 27.9249 9.69502C27.716 8.27745 27.0558 6.96492 26.0424 5.95197C25.0289 4.93902 23.716 4.27956 22.2984 4.07133C20.8807 3.8631 19.4336 4.11717 18.1717 4.79591C16.9097 5.47464 15.9 6.5419 15.2923 7.83951C14.6845 9.13712 14.511 10.596 14.7974 12M20.0001 17.2L14.7974 12.0013L4.78012 23.4467C4.27974 23.9465 3.99842 24.6246 3.99805 25.3319C3.99786 25.6821 4.06665 26.0289 4.2005 26.3525C4.33434 26.6761 4.53062 26.9702 4.77812 27.218C5.02561 27.4658 5.31949 27.6623 5.64296 27.7965C5.96643 27.9307 6.31317 27.9999 6.66337 28.0001C7.37063 28.0004 8.04907 27.7198 8.54945 27.22L20.0001 17.2Z" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p>Audio & Speaker</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M14.6667 5.33333H17.3333M16 22.6667V22.68M8 6.66667C8 5.95942 8.28095 5.28115 8.78105 4.78105C9.28115 4.28095 9.95942 4 10.6667 4H21.3333C22.0406 4 22.7189 4.28095 23.219 4.78105C23.719 5.28115 24 5.95942 24 6.66667V25.3333C24 26.0406 23.719 26.7189 23.219 27.219C22.7189 27.719 22.0406 28 21.3333 28H10.6667C9.95942 28 9.28115 27.719 8.78105 27.219C8.28095 26.7189 8 26.0406 8 25.3333V6.66667Z" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                <p>Handphone</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M14.6667 18.6667L20 26.6667H28L16 5.33334L4 26.6667H12L17.3333 18.6667" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Alat kemah</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[90px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M21.3333 12V20C21.3333 21.7681 20.631 23.4638 19.3807 24.714C18.1305 25.9643 16.4348 26.6667 14.6667 26.6667C12.8986 26.6667 11.2029 25.9643 9.95262 24.714C8.70238 23.4638 8 21.7681 8 20V14.6667L12 18.6667" stroke="#989898" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.3332 6.66667C22.0404 6.66667 22.7187 6.94762 23.2188 7.44772C23.7189 7.94781 23.9998 8.62609 23.9998 9.33333C23.9998 10.0406 23.7189 10.7189 23.2188 11.219C22.7187 11.719 22.0404 12 21.3332 12C20.6259 12 19.9477 11.719 19.4476 11.219C18.9475 10.7189 18.6665 10.0406 18.6665 9.33333C18.6665 8.62609 18.9475 7.94781 19.4476 7.44772C19.9477 6.94762 20.6259 6.66667 21.3332 6.66667ZM21.3332 6.66667V4" stroke="#989898" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Alat pancing</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[100px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M20.0002 17.3333H20.0136M24.0002 17.3333H24.0136M17.5896 12H26.4109C26.7817 11.9999 27.1484 12.0772 27.4877 12.2269C27.827 12.3765 28.1313 12.5953 28.3812 12.8692C28.6312 13.1431 28.8212 13.4661 28.9393 13.8176C29.0574 14.1691 29.1008 14.5414 29.0669 14.9107L28.3109 23.1533C28.1895 24.478 27.5775 25.7094 26.595 26.6061C25.6125 27.5027 24.3304 27.9999 23.0002 28H21.0002C19.6701 27.9999 18.3879 27.5027 17.4054 26.6061C16.4229 25.7094 15.8109 24.478 15.6896 23.1533L14.9336 14.9107C14.8996 14.5414 14.9431 14.1691 15.0611 13.8176C15.1792 13.4661 15.3693 13.1431 15.6192 12.8692C15.8692 12.5953 16.1735 12.3765 16.5127 12.2269C16.852 12.0772 17.2187 11.9999 17.5896 12Z" stroke="#989898" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.0002 22C21.3336 22.8889 22.6669 22.8889 24.0002 22M11.5096 21.3093C11.3403 21.3255 11.1703 21.3335 11.0002 21.3333H9.00022C7.67005 21.3332 6.38793 20.8361 5.40542 19.9394C4.42291 19.0427 3.81093 17.8113 3.68955 16.4867L2.93355 8.24401C2.89962 7.87476 2.94307 7.50249 3.06113 7.15098C3.17919 6.79947 3.36926 6.47645 3.61921 6.20254C3.86915 5.92863 4.17347 5.70986 4.51273 5.56019C4.852 5.41053 5.21874 5.33327 5.58955 5.33334H14.4109C15.1181 5.33334 15.7964 5.6143 16.2965 6.11439C16.7966 6.61449 17.0775 7.29277 17.0775 8.00001M8.00022 10.6667H8.01355M12.0002 10.6667H12.0136" stroke="#989898" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 16C9.01867 15.32 10.0369 15.16 11.0547 15.52" stroke="#989898" stroke-width="1.73333" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Alat tari</p>
                        </button>
                    </li>
                    <li>
                        <button class="font-Host text-[#989898] text-[12px] font-normal text-center w-[100px] h-[49px] gap-2">
                                <div class="flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M16 12C16 12.3536 16.1405 12.6928 16.3905 12.9428C16.6406 13.1929 16.9797 13.3334 17.3333 13.3334C17.687 13.3334 18.0261 13.1929 18.2761 12.9428C18.5262 12.6928 18.6667 12.3536 18.6667 12C18.6667 11.6464 18.5262 11.3073 18.2761 11.0572C18.0261 10.8072 17.687 10.6667 17.3333 10.6667C16.9797 10.6667 16.6406 10.8072 16.3905 11.0572C16.1405 11.3073 16 11.6464 16 12Z" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.66667 10.6667L10.6667 16L16.6667 17.3334M16.6667 17.3334L26.6667 16M16.6667 17.3334L16 21.3334M4 25C4.41506 25.2064 4.86999 25.3201 5.33333 25.3334C5.85266 25.3442 6.36683 25.2285 6.83143 24.9962C7.29604 24.7639 7.69711 24.422 8 24C8.30289 23.578 8.70396 23.2361 9.16857 23.0038C9.63317 22.7715 10.1473 22.6558 10.6667 22.6667C11.186 22.6558 11.7002 22.7715 12.1648 23.0038C12.6294 23.2361 13.0304 23.578 13.3333 24C13.6362 24.422 14.0373 24.7639 14.5019 24.9962C14.9665 25.2285 15.4807 25.3442 16 25.3334C16.5193 25.3442 17.0335 25.2285 17.4981 24.9962C17.9627 24.7639 18.3638 24.422 18.6667 24C18.9696 23.578 19.3706 23.2361 19.8352 23.0038C20.2998 22.7715 20.814 22.6558 21.3333 22.6667C21.8527 22.6558 22.3668 22.7715 22.8314 23.0038C23.296 23.2361 23.6971 23.578 24 24C24.3029 24.422 24.704 24.7639 25.1686 24.9962C25.6332 25.2285 26.1473 25.3442 26.6667 25.3334C27.13 25.3201 27.5849 25.2064 28 25" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.66667 6.66668C8.84348 6.66668 9.01305 6.59644 9.13807 6.47141C9.2631 6.34639 9.33333 6.17682 9.33333 6.00001C9.33333 5.8232 9.2631 5.65363 9.13807 5.52861C9.01305 5.40358 8.84348 5.33334 8.66667 5.33334C8.48986 5.33334 8.32029 5.40358 8.19526 5.52861C8.07024 5.65363 8 5.8232 8 6.00001C8 6.17682 8.07024 6.34639 8.19526 6.47141C8.32029 6.59644 8.48986 6.66668 8.66667 6.66668Z" fill="#989898" stroke="#989898" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                </div>
                                <p>Alat renang</p>
                        </button>
                    </li>
                </ul>
                <div class="bg-[linear-gradient(90deg,rgba(216,216,216,0.00)0%,#D8D8D8_50%,rgba(216,216,216,0.00)100%)] right-0 rounded-full border-[1px] border-[rgba(216,216,216,0)] w-[250px] h-[46px] align-items">
                    <input class="w-full h-full rounded-full outline-none px-4" placeholder="Temukan barangmu" type="search">
                </div>
            </div>
            
        </div>

    </div>

    <!-- <div class="-z-1 absolute top-0">
        <img src="{{asset('image/hero.svg')}}" alt="">
        <h1 class="font-Host font-bold text-[clamp(36px,4.1vw,72px)] mx-auto text-[#25F8FF] mix-blend-difference text-center [text-shadow:_6px_2px_31px_rgb(0_0_0_/_0.40)] leading-[105%] absolute z-0 top-0 pt-[232px]">Temukan yang <br> kamu butuhkan.</h1>
        <div class="flex justify-center pt-[clamp(24px,2.6vw,42px)] z-0">
            <div class="relative">
                <input type="text" placeholder="Mau sewa apa?" class="h-[clamp(40px,3.15vw,56px)] w-[clamp(330px,37.5vw,700px)] bg-white rounded-full drop-shadow-button focus:outline-none focus:ring-0 font-Nunito pl-[27px] text-[clamp(14px,1.04vw,18px)] ">
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2  rounded-full h-[clamp(40px,3.15vw,56px)] w-[clamp(40px,3.65vw,61px)] focus:outline-none bg-white">
                <div class="w-[clamp(28px,2.1vw,36px)]">
                    <img src="{{ asset('icon/searchIcon.png') }}" alt="" class=="w-[28px] flex transform translate-y-1/2">
                </div>    
                </button>

            </div>
        </div>
    </div> -->
</body>
</html>
