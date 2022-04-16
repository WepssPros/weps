<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wedding Elektronik Salesman Program</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    </head>

    <body>
        <!-- START: HEADER -->
        <section class="header-workly">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

                body {
                    font-family: 'Poppins', sans-serif;
                }

                :root {
                    --white-1: #ffffff;
                    --white-2: #eeeeee;
                    --white-3: #ecf1f4;
                    --black: #000000;
                    --dark: #0A0F16;
                    --subtleGreen: #90BCB7;
                    --darkGreen: #082D28;
                    --darkTosca: #569B9B;
                    --tosca-1: #00FFD1;
                    --tosca-2: #27D7D7;
                    --tosca-3: #3FE8FF;
                    --deepTosca-1: #016A6A;
                    --deepTosca-2: #02A6A6;
                    --grey-1: #888888;
                    --grey-2: #666666;
                }

                section.header-workly {
                    background: radial-gradient(100% 100% at 0% 0%, #114E4E 0%, #052D2D 59.9%, #041111 89.53%, #000909 100%);
                }

                .text-40 {
                    font-size: 40px;
                }

                .text-28 {
                    font-size: 28px;
                }

                .text-24 {
                    font-size: 24px;
                }

                .text-20 {
                    font-size: 20px;
                }

                .text-white-1 {
                    color: var(--white-1);
                }

                .text-white-2 {
                    color: var(--white-2);
                }

                .text-darkGreen {
                    color: var(--darkGreen);
                }

                .text-subtleGreen {
                    color: var(--subtleGreen);
                }

                .bg-white-2 {
                    background-color: var(--white-2);
                }

                @media(min-width: 768px) {
                    .leading-px85 {
                        line-height: 85px;
                    }
                }

                .leading-px40 {
                    line-height: 40px;
                }

                .leading-px36 {
                    line-height: 36px;
                }

                .z-min100 {
                    z-index: -100;
                }

                .z-min10 {
                    z-index: -10;
                }

                .max-w-screen {
                    max-width: 1440px;
                }

                .max-w-px400 {
                    max-width: 400px;
                }

                .w-px580 {
                    width: 580px;
                }

                .h-780 {
                    height: 780px;
                }

            </style>
            <header class="pt-7 lg:pb-28">
                <nav class="relative z-10 px-4 mx-auto max-w-screen-2xl lg:px-24">
                    <div class="flex flex-col items-stretch lg:flex-row lg:items-center">


                    </div>
                </nav> <!-- START: HERO BACKGROUND -->
                <div class="mx-auto hero-bg max-w-screen-2xl">
                    <div class="flex justify-end invisible lg:visible"> <img
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-workly/img-header.png"
                            alt="background" class="absolute top-0 z-0 object-cover h-780" /> </div>
                </div> <!-- END: HERO BACKGROUND -->
                <div class="relative z-10 px-4 mx-auto mt-20 hero md:mt-44 max-w-screen-2xl lg:px-24">
                    <div class="grid grid-cols-1 gap-12 md:grid-cols-12">
                        <div class="md:col-span-11 lg:col-span-7">
                            <div
                                class="text-5xl font-semibold leading-normal hero-title text-white-2 md:text-6xl leading-px85">
                                One platform to boost your business </div>
                            <div
                                class="mt-8 text-xl font-normal leading-8 hero-description text-subtleGreen lg:leading-9 md:text-2xl">
                                Learn how to manage your business efficiently with a platform trusted by global leaders.
                            </div>
                            <div class="mt-32"> <a href=""
                                    class="px-10 py-4 text-2xl font-semibold rounded-lg bg-white-2 text-darkGreen">Get
                                    Started</a> </div>
                        </div>
                    </div>
                </div>
            </header>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script>
                // Navbar toggling animation            $(document).ready(function () {                $(".mobile-menu-button").each(function (_, navToggler) {                    var target = $(navToggler).data("target");                    $(navToggler).on("click", function () {                        $(target).animate({                            height: "toggle",                        })                    })                })            })

            </script>
        </section> <!-- END: HEADER -->
        <section class="py-24 explore-promo bg-blackText-3">
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

                .text-blackText-2 {
                    color: var(--black-2);
                }

                .text-blue-secondary {
                    color: var(--blue-secondary);
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

                .bg-blackText-3 {
                    background-color: var(--black-3);
                }

                .bg-blue-primary:hover {
                    background-color: var(--blue-secondary);
                    box-shadow: 0px 24px 32px rgba(15, 82, 186, 0.4);
                }

                .hide-scroll::-webkit-scrollbar {
                    display: none;
                }

                .draggable {
                    position: relative;
                    -webkit-tap-highlight-color: transparent;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    cursor: move;
                    cursor: -webkit-grab;
                    cursor: grab;
                }

                .explore-gallery {
                    height: 300px;
                    /* cursor: -webkit-grabbing;            cursor: grabbing; */
                }

                .image-explore {
                    width: 226px;
                    height: 300px;
                }

                @media (min-width: 768px) {
                    .explore-gallery {
                        height: 600px;
                    }

                    .image-explore {
                        width: 452px;
                        height: 600px;
                    }
                }

            </style>
            <main class="max-w-screen-2xl lg:px-24 px-4 mx-auto content">
                <div class="grid grid-cols-12 gap-3">
                    <div class="col-span-12 lg:col-span-6">
                        <h2 class="mb-5 text-5xl font-bold leading-normal text-white lg:text-6xl">Explore Our Promos
                        </h2>
                        <p class="text-base font-normal leading-7 text-gray-6"> Blandit <span
                                class="font-bold text-blue-secondary">1,900</span> natoque dui justo, dictum turpis
                            amet, viverra vel ornare quis mattis mi ac eget id integer dolor dui aliquam volutpat varius
                            pulvinar massa </p>
                    </div>
                    <div class="flex justify-start col-span-12 lg:col-span-6 lg:justify-end">
                        <div class="py-4 mt-5 lg:mt-0"> <a href="#"
                                class="px-12 py-4 font-semibold text-white transition duration-500 rounded-xl border-0 bg-blue-primary">Learn
                                More</a> </div>
                    </div>
                </div> <!-- GALLERY IMAGE -->
                <div class="grid w-full overflow-hidden overflow-hidden overflow-x-scroll hide-scroll draggable">
                    <div>
                        <div class="flex flex-row explore-gallery mt-14 ">
                            <div class="px-3 pr-0 image-explore md:px-0 md:pr-16"> <img
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/image-1.jpeg"
                                    alt="" class="object-cover w-full h-full rounded-3xl"> </div>
                            <div class="px-3 pr-0 image-explore md:px-0 md:pr-16"> <img
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/image-2.jpeg"
                                    alt="" class="object-cover w-full h-full rounded-3xl"> </div>
                            <div class="px-3 pr-0 image-explore md:px-0 md:pr-16"> <img
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/image-3.jpeg"
                                    alt="" class="object-cover w-full h-full rounded-3xl"> </div>
                        </div>
                    </div>
                </div>
            </main>
        </section><!-- START: PRODUCTS -->
        <section class="products bg-black-1">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

                body {
                    font-family: 'Poppins', sans-serif;
                }

                :root {
                    --white-1: #ffffff;
                    --white-2: #eeeeee;
                    --white-3: #ecf1f4;
                    --black: #000909;
                    --dark: #0A0F16;
                    --subtleGreen: #90BCB7;
                    --darkGreen: #082D28;
                    --darkTosca: #569B9B;
                    --tosca-1: #00FFD1;
                    --tosca-2: #27D7D7;
                    --tosca-3: #3FE8FF;
                    --deepTosca-1: #016A6A;
                    --deepTosca-2: #02A6A6;
                    --grey-1: #888888;
                    --grey-2: #666666;
                }

                .bg-black-1 {
                    background-color: var(--black);
                }

                .bg-dark {
                    background-color: var(--dark);
                }

                .text-40 {
                    font-size: 40px;
                }

                .text-28 {
                    font-size: 28px;
                }

                .text-24 {
                    font-size: 24px;
                }

                .text-20 {
                    font-size: 20px;
                }

                .text-white-1 {
                    color: var(--white-1);
                }

                .text-white-2 {
                    color: var(--white-2);
                }

                .text-grey-1 {
                    color: var(--grey-1);
                }

                .text-grey-2 {
                    color: var(--grey-2);
                }

                .text-darkGreen {
                    color: var(--darkGreen);
                }

                .text-subtleGreen {
                    color: var(--subtleGreen);
                }

                .bg-white-2 {
                    background-color: var(--white-2);
                }

                @media(min-width: 768px) {
                    .mt-px442 {
                        margin-top: 442px;
                    }
                }

                .leading-px40 {
                    line-height: 40px;
                }

                .leading-px36 {
                    line-height: 36px;
                }

                .z-min100 {
                    z-index: -100;
                }

                .z-min10 {
                    z-index: -10;
                }

                .max-w-screen {
                    max-width: 1440px;
                }

                .max-w-px400 {
                    max-width: 400px;
                }

                .w-px580 {
                    width: 580px;
                }

                .h-780 {
                    height: 780px;
                }

            </style> <!-- RIGHT CIRCLE ORNAMENT -->
            <div class="mx-auto max-w-screen-2xl">
                <div class="flex items-center justify-end"> <svg width="316" height="560" viewBox="0 0 316 560"
                        fill="none" class="absolute" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="280" cy="280" r="279" stroke="url(#paint0_linear_154:119)" stroke-width="2" />
                        <defs>
                            <linearGradient id="paint0_linear_154:119" x1="0" y1="0" x2="560" y2="560"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#36745D" />
                                <stop offset="1" stop-color="#155367" />
                            </linearGradient>
                        </defs>
                    </svg> </div>
            </div>
            <main class="relative z-30 px-4 pb-0 mx-auto md:pb-28 our-platform pt-36 max-w-screen-2xl lg:px-24">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
                    <div class="md:col-span-10">
                        <h1 class="font-semibold leading-snug text-white-2 md:leading-9 text-40"> Outputs from Our
                            Platform </h1>
                        <p class="text-xl font-normal leading-8 md:leading-9 md:text-2xl text-grey-1 mt-7"> Our platform
                            specialize on helping our clients work process and communication. <br> Below are the
                            products produced using our platform. </p>
                    </div>
                    <div class="mt-2 md:col-span-3 lg:col-span-2 lg:mt-0">
                        <div class="text-2xl font-semibold text-left bg-transparent text-white-2 lg:text-right"> <a
                                href="#"
                                class="px-0 py-0 transition duration-500 ease-out rounded-lg cursor-pointer lg:hover:bg-darkTosca lg:py-3 lg:px-6">See
                                more</a> </div>
                    </div>
                </div>
                <div class="grid grid-flow-col grid-rows-2 gap-4 mt-12 md:gap-10 md:mt-24">
                    <div class="row-span-2"> <img
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-1.png"
                            alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                    <div class="row-span-1"> <img
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-2.png"
                            alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                    <div class="row-span-1"> <img
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-3.png"
                            alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                    <div class="row-span-2"> <img
                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-4.png"
                            alt="workly" class="object-cover h-full rounded-lg md:rounded-xl w-px400"> </div>
                </div>
            </main>
        </section> <!-- END: PRODUCTS -->
    </body>

</html>
