<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Weding elektronik program sales</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            ntegrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

            body {
                font-family: 'Inter', sans-serif;
            }

            :root {
                --black-1: #080e09;
                --black-2: #232323;
                --black-3: #101419;
                --gray-3: #e2e3e5;
                --gray-4: #c9c9c9;
                --gray-5: #adb2b8;
                --gray-6: #9c9c9c;
                --gray-7: #879fb0;
                --blue-primary: #0f52ba;
                --blue-secondary: #478fff;
                --blue-tertiary: #739ad5;
                --softBlue: #F9FCFC;
                --yellow: #ff9900;
            }

            .border-blue-primary {
                border-color: var(--blue-primary);
            }

            .text-blackText-1 {
                color: var(--black-1);
            }

            .text-blackText-2 {
                color: var(--black-2);
            }

            .text-blue-tertiary {
                color: var(--blue-tertiary);
            }

            .text-gray-6 {
                color: var(--gray-6);
            }

            .shadow-sblue {
                box-shadow: 0px 24px 32px rgba(15, 82, 186, 0.4);
            }

            .shadow-cardShadow {
                box-shadow: 12px 24px 80px rgba(15, 82, 186, 0.06);
            }

            .rounded-28 {
                border-radius: 28px;
            }

            .max-h-cardHotel {
                max-height: 300px;
            }

            .max-w-statisticHero {
                max-width: 85%;
            }

            .max-w-screen {
                max-width: 1440px;
            }

            .h-cardHotel {
                height: 420px;
            }

            .h-imageCard {
                height: 190px;
            }

            .w-imageCard {
                width: 268px;
            }

            .z-forBackground {
                z-index: -99;
            }

            .text-7 {
                font-size: 28px;
            }

            .bg-blue-primary {
                background-color: var(--blue-primary);
            }

            .bg-blue-primary:hover {
                background-color: var(--blue-secondary);
                box-shadow: 0px 24px 32px rgba(15, 82, 186, 0.4);
            }

            .hide-scroll::-webkit-scrollbar {
                display: none;
            }
        </style>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

            .font-poppins {
                font-family: "Poppins", sans-serif;
            }

            :root {
                --dark-1: #111f37;
                --dark-2: #001d01;
                --nogrey: #627492;
                --role-blue: #452FDD;
            }

            .text-dark-1 {
                color: var(--dark-1);
            }

            .text-dark-2 {
                color: var(--dark-2);
            }

            .text-nogrey {
                color: var(--nogrey);
            }

            .text-role-blue {
                color: var(--role-blue);
            }

            .bg-role-blue {
                background-color: var(--role-blue);
            }

            .item-size {
                width: 200px;
                height: 175px;
            }
        </style>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            .footer-2-2 .list-footer li a {
                color: #C7C7C7;
            }

            .footer-2-2 .list-footer li a:hover {
                color: #555252;
            }

            .footer-2-2 .border-color {
                color: #C7C7C7;
            }

            .footer-2-2 .footer-link:hover {
                color: #555252;
            }

            .footer-2-2 .social-media-c:hover circle,
            .footer-2-2 .social-media-p:hover path {
                fill: #555252;
            }
        </style>
    </head>

    <body>
        <section class="header-section">
            <header class="py-7 my-0.5">
                <nav class="max-w-screen-2xl mx-auto px-4 lg:px-24 ">
                    <div class="flex flex-col items-stretch lg:flex-row lg:items-center">
                        <div class="flex items-center justify-between">
                            <!-- LOGO -->
                            <div class="logo text-7 font-bold text-blackText-2"> W.E.S.P </div>
                            <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
                            <div>
                                <button class="block p-1 focus:outline-none lg:hidden mobile-menu-button"
                                    data-target="#navigation"> <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7"
                                        x-show="!showMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h7" />
                                        <path stroke-linecap="round" class="hidden" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- NAV ITEM -->
                        <div class="hidden w-full mobile-menu lg:block" id="navigation">
                            <div
                                class="flex flex-col items-baseline justify-between mt-6 lg:flex-row lg:items-center lg:mt-0">
                                <div
                                    class="flex flex-col w-full mx-0 font-semibold lg:flex-row text-blue-tertiary lg:mx-auto lg:w-max">
                                    <a href="{{url('/')}}"
                                        class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0 active text-blackText-2 border-blue-primary">Home</a>
                                    <a href="{{url('patners')}}"
                                        class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0 ">Partners</a>
                                    <a href="{{url('recomendations')}}"
                                        class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0 ">Recomendation</a>

                                    @if (Route::has('login'))

                                    @auth
                                    @if (Auth::user()->roles == 'ADMIN')
                                    <a href="{{ url('/dashboard') }}" class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9
                                        lg:border-l-0 lg:border-b-4 lg:pl-0">Dashboard</a>
                                    @endif
                                    @if (Auth::user()->roles == 'VENDOR')
                                    <a href="{{ url('/dashboard.vendors') }}" class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9
                                        lg:border-l-0 lg:border-b-4 lg:pl-0">Dashboard -
                                        Vendors
                                    </a>

                                    @endif
                                    <a href="{{ route('profile.show') }}" class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9
                                        lg:border-l-0 lg:border-b-4 lg:pl-0">Setting Profile</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button
                                            class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9 lg:border-l-0 lg:border-b-4 lg:pl-0 font-bold">Log
                                            Out</button>

                                    </form>
                                    @else
                                    <a href="{{ route('login') }}" class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9
                                        lg:border-l-0 lg:border-b-4 lg:pl-0">Log in</a>


                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="py-3 pl-3 mx-2 border-l-4 border-transparent cursor-pointer lg:mx-9
                                        lg:border-l-0 lg:border-b-4 lg:pl-0">Register</a>
                                    @endif
                                    @endauth

                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- hero -->
                <div class="flex justify-end hero-bg flex-nowrap max-w-screen-2xl mx-auto">
                    <svg width="765" height="883" viewBox="0 0 765 883" fill="none"
                        class="absolute mb-24 transform rotate-180 z-forBackground lg:mb-0 bottom-3 top-1 lg:top-0 md:rotate-0"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M582.474 -241.371L285 699.716M556.741 272.5L374.168 214.806M844.687 257.952L714.812 217.536M844.687 309.5L169.77 100.333M867.517 479.313L123.851 247.892M847.868 636L136.5 402M479.265 90.2863L199.946 3.36492M847.868 149.5L215.689 -47.2269M841.169 81.1348L234.494 -107.656M858.224 26.327L251.55 -162.464M220.5 682L460.818 -51.0992M169.77 695.5L399.075 -66.3883M136.5 417L304.257 -99.8194M534 699.716L794.495 -19.7091M587.373 716.326L847.868 -3.09998M654.979 737.364L915.474 17.9383M710.569 -201.509L399.075 747.5"
                            stroke="url(#paint0_radial_532:918)" stroke-width="20" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M272.5 344L328.208 166.708C330.855 158.283 339.827 153.596 348.254 156.235L679.167 259.856C687.428 262.442 696.248 257.99 699.073 249.808L819.5 -98.9996"
                            stroke="url(#paint1_linear_532:918)" stroke-width="6" stroke-linecap="round" />
                        <defs>
                            <radialGradient id="paint0_radial_532:918" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(651.5 -36.9998) rotate(121.424) scale(908.2 470.607)">
                                <stop stop-color="#EBF5FF" />
                                <stop offset="1" stop-color="#EBF5FF" stop-opacity="0" />
                            </radialGradient>
                            <linearGradient id="paint1_linear_532:918" x1="820" y1="-83.5" x2="395.108" y2="476.802"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#CBE5FF" />
                                <stop offset="1" stop-color="#072655" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="max-w-screen-2xl mx-auto px-4 lg:px-24 ">
                    <div class="flex items-center justify-between hero py-16 lg:py-32">
                        <!-- GRID -->
                        <div class="grid items-center grid-cols-2 gap-16 mb-7">
                            <!-- LEFT PART -->
                            <div class="col-span-2 md:col-span-1">
                                <div class="">
                                    <h1
                                        class="mb-1 text-5xl font-bold leading-snug text-blackText-2 md:text-6xl lg:text-6xl md:leading-normal lg:leading-normal">
                                        Weding Elektronik Salesman Program</h1>
                                    <div class="flex flex-row my-12 divide-x-2 divide-gray-300 max-w-statisticHero">
                                        <div class="pr-5 md:pr-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">5000+
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Event</p>
                                        </div>
                                        <div class="px-5 md:px-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">80
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Vendor
                                            </p>
                                        </div>
                                        <div class="px-5 md:px-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">760+
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Pesanan</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mt-1 text-base font-normal leading-7 text-gray-6"> Kami memberikan
                                            pelayanan yang terbaik untuk semua konsumen / pelanggan
                                            yang telah memalakukan pemesanan dan mempercayakan Team W.E.P.S dalam
                                            mengabadikan moment sekali dalam seumur hidup anda,
                                            Dan kami berkomitmen untuk memajukan para pelaku usaha khususnya Jasa
                                            Freelance untuk bermitra bersama dalam membangun relasi antara vendor to
                                            vendor.
                                            <br>
                                            Growing toghether with Vendor !!!
                                        </p>
                                    </div>

                                    <div class="py-3 mt-9">
                                        @auth
                                        @if (Auth::user()->roles == 'ADMIN')
                                        <a href="{{ url('/dashboard') }}"
                                            class="px-12 py-4 font-semibold text-white transition duration-500 rounded-xl border-0 bg-blue-primary">Dashboard</a>
                                        @endif
                                        @if (Auth::user()->roles == 'VENDOR')
                                        <a href="{{ url('/dashboard.vendors') }}"
                                            class="px-12 py-4 font-semibold text-white transition duration-500 rounded-xl border-0 bg-blue-primary">Dashboard
                                            -
                                            Vendors
                                        </a>
                                        @endif
                                        @if (Auth::user()->roles == 'USER')
                                        <a href="{{ url('registervendor') }}"
                                            class="px-12 py-4 font-semibold text-white transition duration-500 rounded-xl border-0 bg-blue-primary">Gabung
                                            Bersama Kita Menjadi Vendor
                                        </a>
                                        @endif
                                        @else
                                        <a href="{{ route('register') }}"
                                            class="px-12 py-4 font-semibold text-white transition duration-500 rounded-xl border-0 bg-blue-primary">Gabung
                                            Menjadi User WESP
                                        </a>

                                        @endauth
                                    </div>
                                </div>
                            </div>
                            <!-- RIGHT PART -->
                            <div class="w-full col-span-2 mt-16 md:col-span-1 lg:mt-0">
                                <!-- START CARD CAROUSEL -->
                                <div
                                    class="flex flex-row overflow-hidden overflow-x-scroll appearance-none   hide-scroll">
                                    <!-- CARD 1 -->
                                    @foreach ($productsmc as $product)
                                    <div class="max-w-xs mr-8 bg-white card md:mr-16 shadow-cardShadow rounded-28 p-7">
                                        <div class="relative h-cardHotel">
                                            <div class="top-row">
                                                <div class="image-placeholder w-imageCard h-imageCard">
                                                    <img // CARA AMBIL STORAGE GINI
                                                        src=" {{ $product->galleries()->exists() ? url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}"
                                                        alt="card-image" class="object-cover w-full rounded-2xl" />
                                                </div>
                                                <div class="mt-12 text-2xl font-bold text-blackText-1">
                                                    {{$product->vendor->name}}
                                                </div>
                                                <div class="mt-2 text-1xl font-bold text-blackText-1">
                                                    {{$product->name}}
                                                </div>
                                                <p class="text-base font-normal leading-7 text-gray-6">
                                                    {{$product->category->name}}</p>
                                            </div>
                                            <div class="absolute bottom-0 w-full bottom-row">
                                                <div class="flex flex-row items-center justify-between">
                                                    <div class="mr-auto">
                                                        <p class="text-blackText-1">Start from <span
                                                                class="font-bold">Rp{{number_format($product->price)}}
                                                            </span> </p>
                                                    </div>
                                                    <div class="flex flex-row items-center"> <svg width="18" height="17"
                                                            viewBox="0 0 18 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.98986 1.58575C8.40236 0.749085 9.59486 0.749085 10.0074 1.58575L11.9724 5.56659L16.3665 6.20492C17.289 6.33909 17.6574 7.47325 16.9899 8.12409L13.8099 11.2241L14.5607 15.5991C14.719 16.5183 13.754 17.2191 12.9282 16.7858L8.9982 14.7191L5.06903 16.7858C4.24403 17.2191 3.27903 16.5191 3.4357 15.5991L4.18653 11.2241L1.00736 8.12409C0.339863 7.47409 0.708197 6.33909 1.6307 6.20492L6.02486 5.56659L7.98986 1.58575Z"
                                                                fill="#FF9900" /> </svg> <span
                                                            class="ml-1 text-yellow">5</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                    <!-- CARD 3 -->


                                </div> <!-- END CARD CAROUSEL -->
                            </div>
                            {{-- RIGHT CARD CAROUSEL  --}} <!-- RIGHT PART 2 -->
                            <!-- LEFT PART2 -->
                            <div class="col-span-2 md:col-span-1">
                                <div
                                    class="flex flex-row overflow-hidden overflow-x-scroll appearance-none   hide-scroll">
                                    <!-- CARD 1 -->

                                    @foreach ($productswo as $product)
                                    <div class="max-w-xs mr-8 bg-white card md:mr-16 shadow-cardShadow rounded-28 p-7">
                                        <div class="relative h-cardHotel">
                                            <div class="top-row">
                                                <div class="image-placeholder w-imageCard h-imageCard">
                                                    <img // CARA AMBIL STORAGE GINI
                                                        src=" {{ $product->galleries()->exists() ? url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}"
                                                        alt="card-image" class="object-cover w-full rounded-2xl" />
                                                </div>
                                                <div class="mt-12 text-1xl font-bold text-blackText-1">
                                                    {{$product->vendor->name}}
                                                </div>
                                                <div class="mt-2 text-1xl font-bold text-blackText-1">
                                                    {{$product->name}}
                                                </div>
                                                <p class="text-base font-normal leading-7 text-gray-6">
                                                    {{$product->category->name}}</p>
                                            </div>
                                            <div class="absolute bottom-0 w-full bottom-row">
                                                <div class="flex flex-row items-center justify-between">
                                                    <div class="mr-auto">
                                                        <p class="text-blackText-1">Start from <span
                                                                class="font-bold">Rp{{number_format($product->price)}}
                                                            </span> </p>
                                                    </div>
                                                    <div class="flex flex-row items-center"> <svg width="18" height="17"
                                                            viewBox="0 0 18 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.98986 1.58575C8.40236 0.749085 9.59486 0.749085 10.0074 1.58575L11.9724 5.56659L16.3665 6.20492C17.289 6.33909 17.6574 7.47325 16.9899 8.12409L13.8099 11.2241L14.5607 15.5991C14.719 16.5183 13.754 17.2191 12.9282 16.7858L8.9982 14.7191L5.06903 16.7858C4.24403 17.2191 3.27903 16.5191 3.4357 15.5991L4.18653 11.2241L1.00736 8.12409C0.339863 7.47409 0.708197 6.33909 1.6307 6.20492L6.02486 5.56659L7.98986 1.58575Z"
                                                                fill="#FF9900" /> </svg> <span
                                                            class="ml-1 text-yellow">5</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                    <!-- CARD 3 -->


                                </div>
                            </div>
                            <!-- LEFT PART2 -->

                            <!-- RIGHT PART 2 -->
                            <div class="col-span-2 md:col-span-1">
                                <div class="">
                                    <h1
                                        class="mb-1 text-5xl font-bold leading-snug text-blackText-2 md:text-6xl lg:text-6xl md:leading-normal lg:leading-normal">
                                        Bekerja Sama Dengan Weding Organizer Profesional</h1>
                                    <div class="flex flex-row my-12 divide-x-2 divide-gray-300 max-w-statisticHero">
                                        <div class="pr-5 md:pr-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">
                                                5000+
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Event</p>
                                        </div>
                                        <div class="px-5 md:px-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">80
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Vendor
                                            </p>
                                        </div>
                                        <div class="px-5 md:px-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">760+
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Pesanan</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mt-1 text-right font-normal leading-7 text-gray-6"> Kami memberikan
                                            pelayanan yang terbaik untuk semua konsumen / pelanggan
                                            yang telah memalakukan pemesanan dan mempercayakan Team W.E.P.S dalam
                                            mengabadikan moment sekali dalam seumur hidup anda,
                                            Dan kami berkomitmen untuk memajukan para pelaku usaha khususnya Jasa
                                            Freelance untuk bermitra bersama dalam membangun relasi antara vendor to
                                            vendor.
                                            <br>
                                            Growing toghether with Vendor !!!
                                        </p>
                                    </div>


                                </div>
                            </div>
                            <!-- LEFT PART3 -->
                            <div class="col-span-2 md:col-span-1">
                                <div class="">
                                    <h1
                                        class="mb-1 text-5xl font-bold leading-snug text-blackText-2 md:text-6xl lg:text-6xl md:leading-normal lg:leading-normal">
                                        Kami Juga Bekerja Sama Dengan Weding Decoration Profesional</h1>
                                    <div class="flex flex-row my-12 divide-x-2 divide-gray-300 max-w-statisticHero">
                                        <div class="pr-5 md:pr-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">
                                                5000+
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Event</p>
                                        </div>
                                        <div class="px-5 md:px-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">80
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Vendor
                                            </p>
                                        </div>
                                        <div class="px-5 md:px-9">
                                            <div class="mb-1 text-3xl font-extrabold text-blackText-2 lg:text-5xl">
                                                760+
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">Pesanan</p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mt-1 text-base font-normal leading-7 text-gray-6"> Kami memberikan
                                            pelayanan yang terbaik untuk semua konsumen / pelanggan
                                            yang telah memalakukan pemesanan dan mempercayakan Team W.E.P.S dalam
                                            mengabadikan moment sekali dalam seumur hidup anda,
                                            Dan kami berkomitmen untuk memajukan para pelaku usaha khususnya Jasa
                                            Freelance untuk bermitra bersama dalam membangun relasi antara vendor to
                                            vendor.
                                            <br>
                                            Growing toghether with Vendor !!!
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!-- START CARD CAROUSEL -->
                            <div class="flex flex-row overflow-hidden overflow-x-scroll appearance-none   hide-scroll">
                                <!-- CARD 1 -->
                                @foreach ($productsdekorasi as $product)
                                <div class="max-w-xs mr-8 bg-white card md:mr-16 shadow-cardShadow rounded-28 p-7">
                                    <div class="relative h-cardHotel">
                                        <div class="top-row">
                                            <div class="image-placeholder w-imageCard h-imageCard">
                                                <img // CARA AMBIL STORAGE GINI
                                                    src=" {{ $product->galleries()->exists() ? url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='}}"
                                                    alt="card-image" class="object-cover w-full rounded-2xl" />
                                            </div>
                                            <div class="mt-12 text-2xl font-bold text-blackText-1">
                                                {{$product->vendor->name}}
                                            </div>
                                            <div class="mt-2 text-1xl font-bold text-blackText-1">
                                                {{$product->name}}
                                            </div>
                                            <p class="text-base font-normal leading-7 text-gray-6">
                                                {{$product->category->name}}</p>
                                        </div>
                                        <div class="absolute bottom-0 w-full bottom-row">
                                            <div class="flex flex-row items-center justify-between">
                                                <div class="mr-auto">
                                                    <p class="text-blackText-1">Start from <span
                                                            class="font-bold">Rp{{number_format($product->price)}}
                                                        </span> </p>
                                                </div>
                                                <div class="flex flex-row items-center"> <svg width="18" height="17"
                                                        viewBox="0 0 18 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.98986 1.58575C8.40236 0.749085 9.59486 0.749085 10.0074 1.58575L11.9724 5.56659L16.3665 6.20492C17.289 6.33909 17.6574 7.47325 16.9899 8.12409L13.8099 11.2241L14.5607 15.5991C14.719 16.5183 13.754 17.2191 12.9282 16.7858L8.9982 14.7191L5.06903 16.7858C4.24403 17.2191 3.27903 16.5191 3.4357 15.5991L4.18653 11.2241L1.00736 8.12409C0.339863 7.47409 0.708197 6.33909 1.6307 6.20492L6.02486 5.56659L7.98986 1.58575Z"
                                                            fill="#FF9900" /> </svg> <span
                                                        class="ml-1 text-yellow">5</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                <!-- CARD 3 -->


                            </div> <!-- END CARD CAROUSEL -->
                            <!-- LEFT PART3 -->

                        </div>
                    </div>
                </div>
            </header>

        </section>
        <section class="bg-white font-poppins">
            <main class="flex flex-col gap-12 px-4 py-20 mx-auto md:px-6 max-w-screen-2xl lg:px-24">
                <div class="grid items-center gap-8 md:grid-cols-12 lg:gap-0">
                    <div class="md:col-span-6">
                        <img src="{{ asset('image/cardweps.svg')}}" alt="GetShayna" class="w-full md:w-11/12" />
                    </div>
                    <div class="md:col-span-6">
                        <div class="flex flex-col gap-5">
                            <div class="text-lg font-bold text-left uppercase text-role-blue">
                                MEMBERIKAN PELAYANAN DAN TRANSAKSI LEBIH TERPERCAYA !
                            </div>
                            <div
                                class="text-4xl font-bold leading-normal lg:text-5xl text-dark-1 md:leading-snug lg:leading-snug">
                                Kembangkan Jasa Kamu <br class="hidden lg:block" />
                                Bersama W.E.S.P
                            </div>
                            <p class="mb-10 text-lg font-medium text-nogrey">
                                Kami telah bekerja sama dengan banyak <br class="hidden lg:block"> Vendor besar untuk
                                membantu
                                kembangkan bisnis Anda

                            </p>
                            <div class="flex flex-row gap-4">
                                <a href="#"
                                    class="px-5 py-3 transition-all duration-300 rounded-lg bg-role-blue hover:bg-blue-800 ring-0 focus:ring-2"><span
                                        class="text-base font-semibold text-white">Start Integrate</span></a>
                                <a href="#"
                                    class="px-5 py-3 transition-all duration-300 bg-white border border-gray-400 rounded-lg hover:bg-gray-100 ring-0 focus:ring-2"><span
                                        class="text-base font-semibold text-nogrey">View Docs</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- .svg LOGOS HERE -->
                <div
                    class="flex flex-row flex-wrap items-center justify-evenly md:justify-center gap-14 md:flex-row mt-14">
                    <svg width="126" height="30" viewBox="0 0 126 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M48.8799 21.6855L47.1656 29.6557H43.2227L49.7371 0.770734H54.4079L60.5366 29.6557H56.5508L54.8794 21.6855H48.8799ZM54.4079 18.4712L53.0793 11.5703C52.6936 9.5988 52.3079 7.02874 52.0086 4.97083H51.8364C51.5371 7.07088 51.1071 9.72738 50.7228 11.5703L49.3514 18.4712H54.4079ZM75.587 0V24.2992C75.587 25.8856 75.6727 28.2 75.7577 29.6564H72.2869L72.0298 27.1285H71.9012C71.2155 28.585 69.6297 30 67.5304 30C63.6731 30 61.3159 25.7992 61.3159 19.329C61.3159 11.9574 64.4439 8.48592 67.7447 8.48592C69.4154 8.48592 70.744 9.25808 71.4726 10.8431H71.5583V0H75.587V0ZM71.5576 16.7568C71.5576 16.3718 71.5576 15.9004 71.5148 15.4704C71.3005 13.5853 70.229 11.9567 68.7725 11.9567C66.2432 11.9567 65.3868 15.4704 65.3868 19.3283C65.3868 23.6141 66.5011 26.6135 68.644 26.6135C69.544 26.6135 70.7433 26.1421 71.429 23.657C71.5148 23.3141 71.5576 22.7991 71.5576 22.3291V16.7568V16.7568ZM85.1829 29.9993C81.0264 29.9993 78.0256 26.4421 78.0256 19.2862C78.0256 11.6996 81.5821 8.48521 85.3965 8.48521C89.5109 8.48521 92.4674 12.171 92.4674 19.1997C92.4674 27.4714 88.3959 29.9993 85.2251 29.9993H85.1829ZM85.3108 26.8285C87.7959 26.8285 88.3537 22.4141 88.3537 19.2433C88.3537 16.114 87.7966 11.6574 85.2258 11.6574C82.5679 11.6574 82.0543 16.114 82.0543 19.2433C82.0543 22.7141 82.6543 26.8285 85.2687 26.8285H85.3108ZM94.896 0H98.924V11.1853H99.0097C100.081 9.30022 101.538 8.48521 103.381 8.48521C106.938 8.48521 109.167 12.5139 109.167 18.8997C109.167 26.3563 106.124 29.9993 102.695 29.9993C100.638 29.9993 99.4811 28.8843 98.5804 27.0414H98.4104L98.1954 29.6557H94.7246C94.8103 28.2421 94.896 25.8849 94.896 24.2984V0V0ZM98.924 22.2841C98.924 22.757 98.9668 23.2284 99.0954 23.5706C99.7376 26.0999 100.981 26.6135 101.795 26.6135C104.195 26.6135 105.095 23.4427 105.095 19.1569C105.095 15.1711 104.153 11.9567 101.752 11.9567C100.423 11.9567 99.3518 13.5425 99.0518 15.0425C98.9661 15.4711 98.9233 16.029 98.9233 16.4568V22.2841H98.924V22.2841ZM115.112 20.0562C115.154 25.4135 117.468 26.7414 119.911 26.7414C121.368 26.7414 122.611 26.3992 123.511 25.9699L124.111 28.8843C122.868 29.5271 120.982 29.8707 119.139 29.8707C113.911 29.8707 111.169 25.9278 111.169 19.499C111.169 12.6846 114.296 8.48449 118.625 8.48449C122.954 8.48449 124.968 12.6417 124.968 17.8711C124.968 18.899 124.925 19.5426 124.882 20.0991L115.112 20.0562V20.0562ZM121.154 17.1854C121.197 13.4996 119.911 11.5288 118.326 11.5288C116.225 11.5288 115.282 14.5718 115.154 17.1854H121.154Z"
                            fill="#627492" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.5198 0.848145H32.5536V29.656L20.5198 0.848145ZM12.0424 0.848145H0V29.656L12.0424 0.848145ZM16.2818 11.4648L23.9491 29.656H18.9247L16.6318 23.8623H11.0195L16.2818 11.4648Z"
                            fill="#627492" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M124.627 8.43189C124.747 8.43245 124.867 8.45692 124.978 8.50387C125.089 8.55083 125.19 8.61936 125.275 8.70549C125.359 8.79163 125.426 8.89366 125.471 9.00572C125.516 9.11777 125.538 9.23762 125.537 9.35835C125.537 9.88122 125.133 10.2891 124.622 10.2891C124.116 10.2891 123.704 9.88193 123.704 9.35835C123.703 9.23716 123.726 9.11704 123.772 9.00485C123.818 8.89266 123.886 8.79062 123.971 8.70456C124.056 8.6185 124.158 8.55012 124.269 8.50333C124.381 8.45655 124.501 8.43227 124.622 8.43189H124.627ZM124.622 8.57547C124.215 8.57547 123.881 8.9262 123.881 9.35835C123.881 9.79907 124.215 10.1448 124.627 10.1448C125.038 10.1491 125.367 9.79907 125.367 9.36263C125.367 8.92619 125.038 8.57547 124.627 8.57547H124.622ZM124.449 9.89836H124.285V8.86405C124.372 8.85191 124.454 8.83905 124.578 8.83905C124.734 8.83905 124.837 8.87262 124.899 8.91762C124.961 8.96262 124.994 9.03263 124.994 9.13191C124.994 9.26763 124.903 9.35049 124.792 9.38335V9.39121C124.882 9.40763 124.944 9.49049 124.964 9.64264C124.989 9.80336 125.014 9.86479 125.031 9.89836H124.858C124.833 9.86479 124.809 9.7705 124.788 9.63478C124.763 9.50263 124.697 9.45335 124.565 9.45335H124.45V9.89836H124.449V9.89836ZM124.449 9.32549H124.569C124.704 9.32549 124.821 9.2762 124.821 9.14834C124.821 9.05762 124.754 8.96691 124.569 8.96691C124.516 8.96691 124.478 8.97119 124.449 8.97548V9.32549V9.32549ZM34.1402 0.848145C34.2609 0.8487 34.3803 0.87316 34.4916 0.920119C34.6028 0.967077 34.7036 1.0356 34.7882 1.12174C34.8729 1.20787 34.9396 1.30991 34.9845 1.42197C35.0295 1.53402 35.0518 1.65387 35.0502 1.77459C35.0502 2.29746 34.6466 2.70533 34.1359 2.70533C33.6295 2.70533 33.2173 2.29818 33.2173 1.77459C33.2166 1.65341 33.2399 1.53328 33.2857 1.42109C33.3316 1.30891 33.3991 1.20686 33.4844 1.1208C33.5697 1.03475 33.6712 0.966367 33.783 0.919579C33.8948 0.872792 34.0147 0.848519 34.1359 0.848145H34.1402ZM34.1359 0.991717C33.728 0.991717 33.3944 1.34244 33.3944 1.77459C33.3944 2.21532 33.728 2.56104 34.1402 2.56104C34.5516 2.56532 34.8816 2.21532 34.8816 1.77888C34.8816 1.34244 34.5516 0.991717 34.1402 0.991717H34.1359ZM33.963 2.31461H33.798V1.28029C33.8948 1.26423 33.9928 1.25611 34.0909 1.25601C34.2473 1.25601 34.3502 1.28816 34.4116 1.33387C34.4738 1.37887 34.5066 1.44958 34.5066 1.54816C34.5066 1.68388 34.4159 1.76674 34.3045 1.7996V1.80745C34.3952 1.82388 34.4573 1.90674 34.478 2.0596C34.5023 2.22032 34.5273 2.28175 34.5438 2.31532H34.3709C34.3459 2.28175 34.3209 2.18746 34.3009 2.05174C34.2759 1.9196 34.2102 1.87031 34.078 1.87031H33.963V2.31461V2.31461ZM33.963 1.74174H34.0823C34.218 1.74174 34.3338 1.69245 34.3338 1.56459C34.3338 1.47387 34.268 1.38316 34.0823 1.38316C34.0287 1.38316 33.9916 1.38744 33.963 1.39173V1.74174V1.74174Z"
                            fill="#627492" />
                    </svg>
                    <svg width="101" height="30" viewBox="0 0 101 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.4594 0C7.17534 0 0.459473 6.71568 0.459473 14.9997C0.459473 23.2847 7.17534 30 15.4594 30C23.7438 30 30.4593 23.2847 30.4593 14.9997C30.4593 6.71621 23.7441 0.000715925 15.4592 0.000715925L15.4594 0V0ZM22.3383 21.6339C22.0689 22.0758 21.4932 22.2143 21.0527 21.945C17.5303 19.7922 13.0968 19.3059 7.8755 20.4987C7.37236 20.614 6.87083 20.2986 6.7562 19.7956C6.64102 19.2925 6.95501 18.7909 7.45941 18.6763C13.1733 17.37 18.0745 17.9323 22.0282 20.3482C22.4688 20.6187 22.6085 21.1937 22.3381 21.6343L22.3383 21.6339V21.6339ZM24.1742 17.5502C23.835 18.1006 23.1153 18.2733 22.5655 17.9353C18.5345 15.4574 12.3877 14.7396 7.61865 16.1873C7.00015 16.3741 6.34691 16.0255 6.15919 15.4081C5.97291 14.7896 6.32166 14.1376 6.93908 13.9496C12.3866 12.2967 19.1587 13.0973 23.7889 15.9426C24.3388 16.2812 24.5126 17.0012 24.174 17.5504L24.1742 17.5502ZM24.3318 13.2972C19.4967 10.4258 11.5213 10.1617 6.90557 11.5626C6.16438 11.7874 5.38056 11.369 5.15594 10.6278C4.93133 9.88626 5.34939 9.10297 6.09112 8.87764C11.3896 7.26916 20.1978 7.57993 25.7637 10.8841C26.4304 11.2798 26.6491 12.1408 26.2539 12.8066C25.8599 13.4733 24.9965 13.6931 24.332 13.2972H24.3318V13.2972ZM41.2693 13.8475C38.6794 13.2299 38.2183 12.7964 38.2183 11.8856C38.2183 11.0251 39.0285 10.446 40.2332 10.446C41.4011 10.446 42.5591 10.8857 43.7732 11.791C43.8099 11.8184 43.8559 11.8293 43.9012 11.8222C43.9466 11.8154 43.9867 11.7905 44.0132 11.753L45.2778 9.97044C45.3297 9.897 45.3156 9.79581 45.2455 9.73974C43.8006 8.58031 42.1735 8.01662 40.2716 8.01662C37.4752 8.01662 35.5219 9.69477 35.5219 12.0959C35.5219 14.6707 37.2069 15.5824 40.1186 16.2862C42.5969 16.857 43.0152 17.3353 43.0152 18.1902C43.0152 19.1375 42.1694 19.7265 40.8082 19.7265C39.2965 19.7265 38.0634 19.2173 36.684 18.0227C36.6498 17.9932 36.6029 17.9797 36.5596 17.9822C36.5139 17.986 36.4721 18.0071 36.4431 18.0421L35.0252 19.7295C34.9658 19.7996 34.9733 19.9042 35.0421 19.9647C36.647 21.3975 38.6208 22.1543 40.7509 22.1543C43.7642 22.1543 45.7114 20.5078 45.7114 17.9595C45.7168 15.8083 44.429 14.6171 41.2747 13.8498L41.2693 13.8475V13.8475ZM52.5287 11.2932C51.2225 11.2932 50.1512 11.8077 49.2678 12.8618V11.6753C49.2678 11.5816 49.1919 11.5053 49.0984 11.5053H46.7793C46.6856 11.5053 46.6099 11.5816 46.6099 11.6753V24.8588C46.6099 24.9524 46.6856 25.0287 46.7793 25.0287H49.0984C49.1919 25.0287 49.2678 24.9524 49.2678 24.8588V20.6973C50.1514 21.6889 51.2229 22.1734 52.5287 22.1734C54.9555 22.1734 57.4123 20.3052 57.4123 16.734C57.4159 13.1618 54.9584 11.2931 52.5313 11.2931L52.5287 11.2932ZM54.7157 16.734C54.7157 18.5526 53.5955 19.8216 51.9915 19.8216C50.4058 19.8216 49.2096 18.4949 49.2096 16.734C49.2096 14.9732 50.4058 13.6463 51.9915 13.6463C53.5695 13.6461 54.7159 14.9444 54.7159 16.7338L54.7157 16.734V16.734ZM63.7092 11.2932C60.5838 11.2932 58.1352 13.6999 58.1352 16.7728C58.1352 19.8123 60.567 22.1937 63.6709 22.1937C66.8075 22.1937 69.2635 19.7951 69.2635 16.7339C69.2635 13.6834 66.8239 11.2936 63.7091 11.2936L63.7092 11.2932V11.2932ZM63.7092 19.8397C62.0468 19.8397 60.7935 18.504 60.7935 16.7331C60.7935 14.9546 62.0035 13.664 63.6709 13.664C65.3441 13.664 66.6058 14.9997 66.6058 16.7719C66.6058 18.55 65.3878 19.8397 63.7094 19.8397H63.7092V19.8397ZM75.9376 11.5053H73.3857V8.89627C73.3857 8.80277 73.3102 8.72647 73.2165 8.72647H70.8978C70.8039 8.72647 70.7278 8.80277 70.7278 8.89627V11.5053H69.6128C69.5195 11.5053 69.4439 11.5816 69.4439 11.6753V13.6683C69.4439 13.7618 69.5195 13.8383 69.6128 13.8383H70.7278V18.9953C70.7278 21.0794 71.7651 22.136 73.8108 22.136C74.6426 22.136 75.3328 21.9642 75.9831 21.5954C76.036 21.5659 76.0688 21.5089 76.0688 21.4484V19.5504C76.0688 19.4918 76.0383 19.4365 75.9882 19.4059C75.9376 19.3742 75.8748 19.3726 75.823 19.3982C75.3763 19.623 74.9444 19.7267 74.4617 19.7267C73.7177 19.7267 73.3857 19.3889 73.3857 18.6317V13.8392H75.9376C76.0313 13.8392 76.1067 13.7629 76.1067 13.6693V11.6764C76.1103 11.5827 76.0351 11.5064 75.9402 11.5064L75.9376 11.5053V11.5053ZM84.8291 11.5155V11.1951C84.8291 10.2524 85.1906 9.83198 86.0013 9.83198C86.4847 9.83198 86.873 9.92799 87.3079 10.0731C87.3615 10.0899 87.4174 10.0815 87.4609 10.0494C87.5057 10.0174 87.5309 9.96596 87.5309 9.91151V7.95732C87.5309 7.88263 87.4829 7.81654 87.4109 7.7945C86.9515 7.65783 86.3636 7.51758 85.4834 7.51758C83.3415 7.51758 82.2093 8.72377 82.2093 11.0045V11.4953H81.0952C81.0017 11.4953 80.925 11.5716 80.925 11.6651V13.6683C80.925 13.7618 81.0017 13.8383 81.0952 13.8383H82.2093V21.7928C82.2093 21.8865 82.2849 21.9628 82.3784 21.9628H84.6975C84.7911 21.9628 84.8674 21.8865 84.8674 21.7928V13.8389H87.0326L90.3494 21.7914C89.9728 22.627 89.6026 22.7932 89.0971 22.7932C88.6886 22.7932 88.2583 22.6712 87.8184 22.4305C87.777 22.4077 87.7279 22.4039 87.6834 22.4177C87.6391 22.4333 87.6019 22.4663 87.583 22.5093L86.7971 24.2336C86.7596 24.3151 86.7917 24.4108 86.8701 24.4531C87.6907 24.8974 88.4314 25.0871 89.3468 25.0871C91.0592 25.0871 92.0057 24.2895 92.84 22.1437L96.8632 11.7476C96.8834 11.6953 96.8773 11.6362 96.8453 11.5899C96.8134 11.5438 96.762 11.5161 96.7057 11.5161H94.2916C94.2192 11.5161 94.1545 11.5621 94.1309 11.63L91.6578 18.694L88.949 11.6253C88.9243 11.5596 88.8609 11.516 88.7907 11.516H84.8286L84.8291 11.5155V11.5155ZM79.6741 11.5053H77.355C77.2613 11.5053 77.185 11.5816 77.185 11.6753V21.7928C77.185 21.8865 77.2613 21.9628 77.355 21.9628H79.6741C79.7676 21.9628 79.844 21.8865 79.844 21.7928V11.676C79.8441 11.6536 79.8397 11.6315 79.8312 11.6108C79.8226 11.5902 79.8101 11.5714 79.7943 11.5556C79.7785 11.5398 79.7597 11.5273 79.739 11.5188C79.7184 11.5103 79.6962 11.5059 79.6739 11.506L79.6741 11.5053ZM78.5277 6.89857C77.609 6.89857 76.8635 7.64226 76.8635 8.56096C76.8635 9.4802 77.6092 10.2248 78.5277 10.2248C79.4461 10.2248 80.1908 9.4802 80.1908 8.56096C80.1908 7.64244 79.4457 6.89857 78.5286 6.89857H78.5277V6.89857ZM98.8433 14.7583C97.9255 14.7583 97.2114 14.0212 97.2114 13.1261C97.2114 12.2311 97.9348 11.4856 98.8519 11.4856C99.7697 11.4856 100.484 12.2225 100.484 13.1168C100.484 14.0119 99.7602 14.7583 98.8432 14.7583H98.8433V14.7583ZM98.8523 11.6479C98.0163 11.6479 97.3839 12.3124 97.3839 13.1261C97.3839 13.9395 98.0118 14.5951 98.8439 14.5951C99.6796 14.5951 100.313 13.9311 100.313 13.1168C100.313 12.3035 99.6841 11.6479 98.853 11.6479H98.8523V11.6479ZM99.2141 13.2847L99.6757 13.9309H99.2865L98.8709 13.338H98.5136V13.9309H98.1878V12.2178H98.9517C99.3497 12.2178 99.6114 12.4215 99.6114 12.7643C99.6132 13.0452 99.4502 13.2168 99.2156 13.2847H99.2141V13.2847ZM98.9383 12.5118H98.5134V13.0536H98.9383C99.1503 13.0536 99.277 12.9499 99.277 12.7824C99.277 12.6062 99.1498 12.5118 98.9384 12.5118H98.9383V12.5118Z"
                            fill="#627492" />
                    </svg>
                    <svg width="93" height="30" viewBox="0 0 93 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.4734 0H12.2907C15.1281 0.0616822 17.9192 1.2028 19.9239 3.2229C19.1837 3.9785 18.4281 4.70327 17.7033 5.45888C16.5776 4.44112 15.2206 3.65467 13.7403 3.3771C11.5505 2.91449 9.19119 3.33084 7.35615 4.57991C5.35147 5.89065 3.99447 8.11121 3.70147 10.486C3.37764 12.8299 4.04073 15.2972 5.56736 17.1168C7.03232 18.8902 9.2683 20.0005 11.5814 20.0776C13.7403 20.2009 15.9917 19.5378 17.5646 18.0266C18.7982 16.9626 19.3688 15.3435 19.5538 13.7706C16.994 13.7706 14.4342 13.786 11.8744 13.7706V10.5939H22.6533C23.2085 14.0019 22.4066 17.8416 19.816 20.278C18.0889 22.0051 15.6987 23.0229 13.2622 23.2234C10.9029 23.4547 8.46643 23.0075 6.36923 21.8664C3.85568 20.5248 1.85101 18.2579 0.864091 15.5902C-0.0611422 13.1383 -0.0765628 10.3626 0.786989 7.89533C1.57344 5.64392 3.08465 3.65467 5.02764 2.26682C6.89353 0.894392 9.16035 0.138785 11.4734 0Z"
                            fill="#627492" />
                        <path
                            d="M73.3101 0.802002H76.6101V22.8226C75.5152 22.8226 74.4049 22.838 73.3101 22.8071C73.3255 15.4824 73.3101 8.14219 73.3101 0.802002V0.802002Z"
                            fill="#627492" />
                        <path
                            d="M29.9937 8.43513C32.0292 8.04962 34.2344 8.48139 35.9152 9.69962C37.4418 10.7791 38.5059 12.4753 38.8297 14.3258C39.246 16.4692 38.7218 18.8132 37.3339 20.5094C35.8381 22.4062 33.3862 23.4239 30.996 23.2697C28.8063 23.1463 26.6783 22.0515 25.383 20.2627C23.918 18.2889 23.5633 15.5749 24.3652 13.2618C25.1671 10.7791 27.4339 8.88233 29.9937 8.43513V8.43513ZM30.4563 11.365C29.6236 11.5809 28.8526 12.059 28.2975 12.7375C26.8017 14.5263 26.8942 17.4407 28.5442 19.1062C29.4848 20.0622 30.9035 20.5094 32.2143 20.2473C33.4325 20.0314 34.4965 19.2141 35.0825 18.1347C36.1003 16.2996 35.8073 13.7706 34.2498 12.3365C33.2475 11.4113 31.7825 11.0258 30.4563 11.365Z"
                            fill="#627492" />
                        <path
                            d="M46.3395 8.43505C48.668 7.98785 51.2123 8.63551 52.9549 10.2701C55.7923 12.8145 56.1007 17.5794 53.6796 20.5093C52.2147 22.3598 49.8399 23.3776 47.496 23.2696C45.26 23.2079 43.0549 22.0977 41.7287 20.2626C40.2329 18.2425 39.9091 15.4668 40.7572 13.1075C41.6053 10.7019 43.8259 8.86682 46.3395 8.43505V8.43505ZM46.8021 11.365C45.9694 11.5808 45.1983 12.0589 44.6432 12.722C43.1628 14.4799 43.2245 17.3481 44.8128 19.029C45.7535 20.0313 47.2184 20.5248 48.5754 20.2472C49.7782 20.0159 50.8577 19.214 51.4437 18.1346C52.446 16.2841 52.153 13.7551 50.5801 12.321C49.5778 11.3958 48.1128 11.0257 46.8021 11.365Z"
                            fill="#627492" />
                        <path
                            d="M60.2023 9.32943C61.9756 8.21915 64.335 7.91074 66.2471 8.86681C66.8485 9.12896 67.342 9.57616 67.82 10.0234C67.8355 9.607 67.82 9.17522 67.8355 8.74345C68.8686 8.75887 69.9018 8.74345 70.9504 8.75887V22.3598C70.935 24.4107 70.4107 26.585 68.9303 28.0808C67.3112 29.7308 64.8284 30.2397 62.5925 29.9005C60.2023 29.5458 58.1205 27.8033 57.1953 25.5981C58.1205 25.1509 59.092 24.7963 60.0481 24.3799C60.5878 25.6444 61.6827 26.7238 63.0551 26.9706C64.4275 27.2173 66.0158 26.878 66.9102 25.7369C67.8663 24.5649 67.8663 22.9612 67.82 21.5271C67.1107 22.221 66.2934 22.8378 65.3065 23.0692C63.163 23.6706 60.8037 22.9304 59.1537 21.4808C57.4883 20.0313 56.5013 17.7953 56.5939 15.5748C56.6401 13.0612 58.0588 10.6402 60.2023 9.32943V9.32943ZM63.3943 11.3033C62.4537 11.4575 61.5747 11.9818 60.9733 12.7065C59.5238 14.4336 59.5238 17.1939 60.9887 18.8902C61.8214 19.8925 63.163 20.4477 64.4584 20.3089C65.6766 20.1855 66.8023 19.4145 67.4037 18.3505C68.4214 16.5463 68.2518 14.0944 66.8794 12.5215C66.0313 11.55 64.6742 11.072 63.3943 11.3033V11.3033Z"
                            fill="#627492" />
                        <path
                            d="M80.5729 10.116C82.4234 8.38888 85.2762 7.8029 87.651 8.71271C89.9024 9.56084 91.3365 11.7043 92.0613 13.9094C88.715 15.2973 85.3842 16.6697 82.0379 18.0576C82.5005 18.9365 83.2099 19.7384 84.1659 20.0622C85.5075 20.5403 87.1113 20.3707 88.237 19.4763C88.6842 19.137 89.0388 18.6898 89.3781 18.258C90.2262 18.8286 91.0743 19.3837 91.9225 19.9543C90.7197 21.7585 88.6996 23.023 86.5253 23.2235C84.1197 23.5164 81.5599 22.5912 80.0024 20.7099C77.4426 17.7492 77.6893 12.7837 80.5729 10.116V10.116ZM82.2229 12.9688C81.6986 13.7244 81.4827 14.6496 81.4982 15.5594C83.7342 14.6342 85.9701 13.709 88.2061 12.7683C87.836 11.9048 86.9416 11.3805 86.0318 11.2417C84.5669 10.9795 83.0402 11.766 82.2229 12.9688V12.9688Z"
                            fill="#627492" />
                    </svg>
                    <svg width="156" height="30" viewBox="0 0 156 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5102 4.72155C10.6942 4.72155 10.1494 5.52058 10.1494 7.30025V10.2421H15.0162L14.5441 15.0363H10.1494V29.5279H4.30191V15.0363H0.379395V10.2785H4.30191V7.4092C4.30191 2.54237 6.26318 0 11.6748 0C12.8007 0 13.9629 0.0726393 15.0888 0.217918V4.72155"
                            fill="#627492" />
                        <path
                            d="M15.4157 19.2856C15.4157 13.9103 17.9581 9.84253 23.3334 9.84253C26.239 9.84253 28.0186 11.3316 28.8903 13.2203V10.2784H34.4835V29.5641H28.854V26.6585C28.0549 28.5108 26.2026 29.9636 23.2971 29.9636C17.9581 29.9636 15.3794 25.9321 15.3794 20.5205L15.4157 19.2856ZM21.2632 20.5931C21.2632 23.4624 22.3164 25.3873 25.0404 25.3873C27.4375 25.3873 28.6361 23.644 28.6361 20.8837V18.9224C28.6361 16.1621 27.4012 14.4188 25.0404 14.4188C22.3164 14.4188 21.2632 16.3074 21.2632 19.213V20.5931V20.5931Z"
                            fill="#627492" />
                        <path
                            d="M46.6142 9.84253C48.866 9.84253 51.0452 10.3147 52.2074 11.15L50.8999 15.2905C49.7013 14.7094 48.3575 14.4188 47.0137 14.4188C43.8539 14.4188 42.4737 16.2348 42.4737 19.3583V20.4842C42.4737 23.6077 43.8539 25.4237 47.0137 25.4237C48.3575 25.4237 49.7013 25.0968 50.8999 24.5157L52.2074 28.6561C51.0452 29.4551 48.9023 29.9636 46.6142 29.9636C39.7498 29.9636 36.6626 26.2953 36.6626 20.3752V19.4672C36.6626 13.5471 39.7498 9.84253 46.6142 9.84253"
                            fill="#627492" />
                        <path
                            d="M52.9702 20.6295V18.9224C52.9702 13.4382 56.0937 9.84253 62.4496 9.84253C68.4424 9.84253 71.0937 13.4745 71.0937 18.8498V21.937H58.8177C58.9266 24.5883 60.1252 25.7505 63.3576 25.7505C65.4642 25.7505 67.5707 25.351 69.5683 24.5883L70.6216 28.5835C69.0961 29.3825 65.9363 29.9999 63.1397 29.9999C55.7305 29.9636 52.9702 26.2953 52.9702 20.6295V20.6295ZM58.8177 18.0871H65.8637V17.6149C65.8637 15.5084 65.0283 13.8377 62.4496 13.8377C59.8346 13.8377 58.8177 15.5084 58.8177 18.0871Z"
                            fill="#627492" />
                        <path
                            d="M92.7399 20.5205C92.7399 25.8958 90.1612 29.9636 84.7859 29.9636C81.8804 29.9636 79.8465 28.5108 79.0474 26.6585V29.5641H73.5269V0.580985L79.3743 0.0725098V12.966C80.2097 11.259 82.0983 9.87881 84.8223 9.87881C90.1613 9.87881 92.7763 13.9103 92.7763 19.3219L92.7399 20.5205ZM86.8925 19.1766C86.8925 16.4527 85.8392 14.4188 83.0426 14.4188C80.6455 14.4188 79.3743 16.1258 79.3743 18.8861V20.92C79.3743 23.6803 80.6818 25.3873 83.0426 25.3873C85.8392 25.3873 86.8925 23.3534 86.8925 20.6294V19.1766Z"
                            fill="#627492" />
                        <path
                            d="M94.665 20.3752V19.3946C94.665 13.8377 97.8248 9.84253 104.253 9.84253C110.682 9.84253 113.842 13.8377 113.842 19.3946V20.3752C113.842 25.9321 110.682 29.9273 104.253 29.9273C97.8248 29.9273 94.665 25.9684 94.665 20.3752V20.3752ZM108.031 18.9951C108.031 16.4527 106.977 14.4188 104.253 14.4188C101.529 14.4188 100.476 16.4527 100.476 18.9951V20.8111C100.476 23.3534 101.529 25.3873 104.253 25.3873C106.977 25.3873 108.031 23.3534 108.031 20.8111V18.9951V18.9951Z"
                            fill="#627492" />
                        <path
                            d="M115.84 20.3752V19.3946C115.84 13.8377 119 9.84253 125.428 9.84253C131.857 9.84253 135.017 13.8377 135.017 19.3946V20.3752C135.017 25.9321 131.857 29.9273 125.428 29.9273C119 29.9273 115.84 25.9684 115.84 20.3752V20.3752ZM129.205 18.9951C129.205 16.4527 128.152 14.4188 125.428 14.4188C122.704 14.4188 121.651 16.4527 121.651 18.9951V20.8111C121.651 23.3534 122.704 25.3873 125.428 25.3873C128.152 25.3873 129.205 23.3534 129.205 20.8111V18.9951V18.9951Z"
                            fill="#627492" />
                        <path
                            d="M143.043 19.4674L148.818 10.2422H154.992L148.963 19.7943L155.246 29.5642H149.036L143.043 20.1211V29.5642H137.232V0.581171L143.043 0.036377"
                            fill="#627492" />
                    </svg>
                    <svg width="231" height="30" viewBox="0 0 231 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M196.835 11.9008V30H202.62V17.9339H223.777V30H229.562V11.9008H196.835ZM201.959 6.03306H224.273C227.413 5.45455 229.645 2.64463 230.306 0H195.926C196.587 2.64463 198.901 5.3719 201.959 6.03306ZM179.232 30C182.124 28.7603 183.694 26.6116 184.356 24.1322H158.323V0.0826446H152.455V30H179.232V30ZM109.066 5.95041H129.727C132.868 5.04132 135.43 2.64463 136.091 0.0826446H103.364V17.7686H130.141V23.9669H109.149C105.843 24.876 103.033 27.1074 101.628 30H135.926V11.9008H109.149L109.066 5.95041ZM58.1572 6.03306H80.4713C83.6118 5.45455 85.9258 2.64463 86.5043 0H52.0415C52.7027 2.64463 55.0167 5.3719 58.1572 6.03306ZM58.1572 17.8512H80.4713C83.6118 17.2727 85.9258 14.4628 86.5043 11.8182H52.0415C52.7027 14.4628 55.0167 17.1901 58.1572 17.8512ZM58.1572 30H80.4713C83.6118 29.4215 85.9258 26.6116 86.5043 23.9669H52.0415C52.7027 26.6116 55.0167 29.4215 58.1572 30Z"
                            fill="#627492" />
                        <path
                            d="M0.0576172 0.0826446C0.718774 2.72727 3.03282 5.3719 6.09067 6.03306H15.5122L16.008 6.19835V29.9174H21.8758V6.19835L22.3717 6.03306H31.7932C34.9336 5.20661 37.1651 2.72727 37.8262 0.0826446V0L0.0576172 0.0826446Z"
                            fill="#627492" />
                    </svg>
                </div>

            </main>
        </section>
        <section class="h-full pt-10 pb-12 lg:px-24 md:px-16 sm:px-8 px-4 bg-white transition-all duration-500 linear">

            <footer class="footer-2-2" style="font-family: 'Poppins', sans-serif;">
                <div class="lg:pb-24 pb-16 mx-auto">
                    <div class="grid lg:grid-cols-4 sm:grid-cols-2 lg:gap-0 gap-y-6">
                        <div class="">
                            <div class="mb-5">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-5.png"
                                    alt="">
                            </div>
                            <nav class="list-none list-footer space-y-5">
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>
                                    <a href="">About</a>
                                </li>
                                <li>
                                    <a href="">Features</a>
                                </li>
                                <li>
                                    <a href="">Pricing</a>
                                </li>
                                <li>
                                    <a href="">Testimonial</a>
                                </li>
                                <li>
                                    <a href="">Help</a>
                                </li>
                            </nav>
                        </div>
                        <div class="">
                            <h2 class="title-font font-semibold text-2xl mb-5">Product</h2>
                            <nav class="list-none list-footer space-y-5">
                                <li>
                                    <a href="">Real Time Analytic</a>
                                </li>
                                <li>
                                    <a href="">Easy to Operate</a>
                                </li>
                                <li>
                                    <a href="">Full Secured</a>
                                </li>
                                <li>
                                    <a href="">Analytic Tool</a>
                                </li>
                                <li>
                                    <a href="">Story</a>
                                </li>
                            </nav>
                        </div>
                        <div class="">
                            <h2 class="title-font font-semibold text-2xl mb-5">Company</h2>
                            <nav class="list-none list-footer space-y-5">
                                <li>
                                    <a href="">Contact Us</a>
                                </li>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                                <li>
                                    <a href="">Culture</a>
                                </li>
                                <li>
                                    <a href="">Security</a>
                                </li>
                            </nav>
                        </div>
                        <div class="">
                            <h2 class="title-font font-semibold text-2xl mb-5">Support</h2>
                            <nav class="list-none list-footer space-y-5">
                                <li>
                                    <a href="">Getting Started</a>
                                </li>
                                <li>
                                    <a href="">Help Center</a>
                                </li>
                                <li>
                                    <a href="">Server Status</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="border-color mx-auto">
                    <div class="">
                        <hr>
                    </div>
                    <div class="container mx-auto flex  pt-12 flex-col lg:flex-row items-center space-y-5 lg:space-y-0">
                        <div class="flex title-font font-medium items-center text-gray-900 mb-4 lg:mb-0 md:mb-0 space-x-5"
                            style="cursor: pointer;">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                    fill="#C7C7C7" />
                                <path
                                    d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                    fill="#C7C7C7" />
                                <path
                                    d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                                    fill="#C7C7C7" />
                            </svg>
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727V20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147V21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194V15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133V9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533V9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733V14.5733Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white" transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <nav class="mx-auto flex flex-wrap items-center text-base justify-center space-x-5">
                            <a href="" class="footer-link">Terms of Service</a>
                            <span>|</span>
                            <a href="" class="footer-link">Privacy Policy</a>
                            <span>|</span>
                            <a href="" class="footer-link">Licenses</a>
                        </nav>
                        <nav class="flex lg:flex-row flex-col items-center text-base justify-center">
                            <p>Copyright © 2021 Analystic Max</p>
                        </nav>
                    </div>
                </div>
            </footer>
        </section>
        <script>
            $(document).ready(function () {
                $(".mobile-menu-button").each(function (_, navToggler) {
                    var target = $(navToggler).data("target");
                    $(navToggler).on("click", function () {
                        $(target).animate({
                            height: "toggle",
                        })
                    })
                })
            })
        </script>
    </body>


</html>
