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
        <section class="testimony py-24">
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

                .text-gray-6 {
                    color: var(--gray-6);
                }

                .sblue {
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

                .testimonial-bg {
                    width: 502px;
                    height: 784px;
                }

            </style>
            <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content">
                <!-- background image -->
                <div class="flex justify-end invisible lg:visible"> <img
                        src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/testimonial-photo-bg.png"
                        alt="background" class="absolute max-w-screen-2xl z-forBackground testimonial-bg" /> </div>
                <div class="pt-3 section-heading mb-16">
                    <div class="mb-3 text-4xl font-bold leading-normal text-blackText-2 lg:text-6xl lg:leading-normal">
                        Here is what our clients <br class="hidden md:block" /> are saying about us </div>
                </div>
                <div class="grid grid-cols-2 quote gap-14 lg:gap-44">
                    <div class="col-span-2 lg:col-span-1">
                        <div class="flex star-rating"> <img
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" class="w-6 mr-3" /> <img
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" class="w-6 mr-3" /> <img
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" class="w-6 mr-3" /> <img
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" class="w-6 mr-3" /> <img
                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                alt="star" class="w-6 mr-3" /> </div>
                        <div class="pr-8 mt-5 message">
                            <p class="text-base font-normal leading-7 text-gray-6"> “Great way to make the first market
                                value estmate and then to select an experienced active broker in the local area for a
                                more in-depth study. Professional and personalised advice, while avoiding going through
                                the big brokers who charge fees that are too much.” </p>
                        </div>
                        <div class="flex items-center pt-1 user mt-14">
                            <div class="mr-6"> <img
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/testimonial-user.png"
                                    alt="avatar-user" width="100" /> </div>
                            <div>
                                <div class="font-bold leading-snug username text-7 text-blackText-2"> M.Reyhan Dwi
                                    Amberta
                                </div>
                                <div class="user-job">
                                    <p class="font-semibold text-base leading-7 text-gray-6"> Founder of WESP
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 lg:col-span-1">
                        <!-- CARD -->
                        <div class="max-w-xs bg-white card shadow-cardShadow rounded-28 p-7">
                            <div class="relative h-cardHotel">
                                <div class="top-row">
                                    <div class="image-placeholder w-imageCard h-imageCard"> <img
                                            src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/card-hotel-image-(4).jpg"
                                            alt="card-image" class="object-cover w-full rounded-2xl" /> </div>
                                    <div class="mt-6 text-2xl font-bold text-blackText-1"> Hotel Tentrem </div>
                                    <p class="text-base font-normal leading-7 text-gray-6">150m</p>
                                </div>
                                <div class="absolute bottom-0 w-full bottom-row">
                                    <div class="flex flex-row items-center justify-between">
                                        <div class="mr-auto">
                                            <p class="text-blackText-1 text-base font-normal leading-7">Start from <span
                                                    class="font-bold">40 USD</span> </p>
                                        </div>
                                        <div class="flex flex-row items-center"> <img
                                                src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                                alt="star" /> <span class="ml-1 text-yellow">4.8</span> </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="h-auto bg-white font-poppins">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

                .font-poppins {
                    font-family: "Poppins", sans-serif;
                }

                :root {
                    --dark-1: #111f37;
                    --dark-2: #001d01;
                    --nogrey: #627492;
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

            </style>
            <main
                class="          flex flex-col          gap-12          px-4          py-20          mx-auto          max-w-screen-2xl          lg:px-24        ">
                <div class="flex flex-col items-center justify-center gap-5">
                    <div class="text-lg font-bold text-center text-blue-700 uppercase"> Our Formula </div>
                    <div
                        class="              text-4xl              md:text-5xl              font-bold              text-center text-dark-1              leading-normal              lg:leading-snug            ">
                        3-Steps to Work at <br class="hidden lg:block" /> Your Dream Companies </div>
                </div>
                <div class="grid items-center justify-center h-full gap-5 md:grid-cols-12">
                    <!-- CARD 1 -->
                    <div class="h-full md:col-span-6 lg:col-span-4">
                        <div
                            class="                flex flex-col                items-center                justify-center                pb-10                border border-gray-300                px-9                pt-14                rounded-3xl              ">
                            <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="53" cy="53" r="52.5" stroke="#E5D4FF" />
                                    <circle cx="53" cy="53" r="45" fill="#E5D4FF" />
                                    <path
                                        d="M65 66.5V63.5C65 61.9087 64.3679 60.3826 63.2426 59.2574C62.1174 58.1321 60.5913 57.5 59 57.5H47C45.4087 57.5 43.8826 58.1321 42.7574 59.2574C41.6321 60.3826 41 61.9087 41 63.5V66.5"
                                        stroke="#654B8C" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M53 51.5C56.3137 51.5 59 48.8137 59 45.5C59 42.1863 56.3137 39.5 53 39.5C49.6863 39.5 47 42.1863 47 45.5C47 48.8137 49.6863 51.5 53 51.5Z"
                                        stroke="#654B8C" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" /> </svg> </div>
                            <div class="mt-10 mb-3 text-lg font-semibold text-dark-2"> Sign Up </div>
                            <p class="text-base font-medium text-center text-gray-500"> Get yourself ready and join our
                                great adventures </p>
                        </div>
                    </div> <!-- CARD 2 -->
                    <div class="h-full md:col-span-6 lg:col-span-4">
                        <div
                            class="                flex flex-col                items-center                justify-center                pb-10                border border-gray-300                px-9                pt-14                rounded-3xl              ">
                            <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="53" cy="53" r="52.5" stroke="#FFECC2" />
                                    <circle cx="53" cy="53" r="45" fill="#FFECC2" />
                                    <path
                                        d="M68 39.5H59C57.4087 39.5 55.8826 40.1321 54.7574 41.2574C53.6321 42.3826 53 43.9087 53 45.5V66.5C53 65.3065 53.4741 64.1619 54.318 63.318C55.1619 62.4741 56.3065 62 57.5 62H68V39.5Z"
                                        stroke="#9F854C" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M38 39.5H47C48.5913 39.5 50.1174 40.1321 51.2426 41.2574C52.3679 42.3826 53 43.9087 53 45.5V66.5C53 65.3065 52.5259 64.1619 51.682 63.318C50.8381 62.4741 49.6935 62 48.5 62H38V39.5Z"
                                        stroke="#9F854C" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" /> </svg> </div>
                            <div class="mt-10 mb-3 text-lg font-semibold text-dark-2"> Finish The Quiz </div>
                            <p class="text-base font-medium text-center text-gray-500"> Answer the question that we've
                                prepared for your career </p>
                        </div>
                    </div> <!-- CARD 3 -->
                    <div class="h-full md:col-span-6 lg:col-span-4">
                        <div
                            class="                flex flex-col                items-center                justify-center                pb-10                border border-gray-300                px-9                pt-14                rounded-3xl              ">
                            <div> <svg width="106" height="106" viewBox="0 0 106 106" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="53" cy="53" r="52.5" stroke="#FCE1D8" />
                                    <circle cx="53" cy="53" r="45" fill="#FDE1D7" />
                                    <path
                                        d="M65 45.5H41C39.3431 45.5 38 46.8431 38 48.5V63.5C38 65.1569 39.3431 66.5 41 66.5H65C66.6569 66.5 68 65.1569 68 63.5V48.5C68 46.8431 66.6569 45.5 65 45.5Z"
                                        stroke="#B67E6A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M59 66.5V42.5C59 41.7044 58.6839 40.9413 58.1213 40.3787C57.5587 39.8161 56.7956 39.5 56 39.5H50C49.2044 39.5 48.4413 39.8161 47.8787 40.3787C47.3161 40.9413 47 41.7044 47 42.5V66.5"
                                        stroke="#B67E6A" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" /> </svg> </div>
                            <div class="mt-10 mb-3 text-lg font-semibold text-dark-2"> Interview </div>
                            <p class="text-base font-medium text-center text-gray-500"> We will setup the meeting with
                                your dream companies </p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-5 flex-row"> <a href="{{url('/')}}"
                        class="px-6 py-4 text-center bg-green-400 rounded-lg"> <span
                            class="text-base font-semibold text-dark-2">Get Started</span> </a> <a href="{{url('/')}}"
                        class="              px-6              py-4              text-center              bg-white              border border-gray-400              rounded-lg            ">
                        <span class="text-base font-semibold text-nogrey">Read Story</span> </a> </div>
            </main>
        </section>
        <section class="value bg-softBlue py-16">
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

                .text-blue-primary {
                    color: var(--blue-primary);
                }

                .text-gray-6 {
                    color: var(--gray-6);
                }

                .text-gray-7 {
                    color: var(--gray-7);
                }

                .shadow-sblue {
                    box-shadow: 0px 24px 32px rgba(15, 82, 186, 0.4);
                }

                .shadow-cardShadow {
                    box-shadow: none;
                }

                .cardShadow:hover {
                    box-shadow: 12px 24px 80px rgba(15, 82, 186, 0.06);
                }

                .rounded-28 {
                    border-radius: 28px;
                }

                .z-forBackground {
                    z-index: -99;
                }

                .text-7 {
                    font-size: 28px;
                }

                .bg-softBlue {
                    background-color: var(--softBlue);
                }

                .icon-placeholder {
                    height: 200px;
                    width: 274px;
                }

                @media (min-width: 768px) {
                    .icon-placeholder {
                        height: 274px;
                        width: 303px;
                    }
                }

                @media (min-width: 1024px) {
                    .icon-placeholder {
                        width: 250px;
                    }
                }

            </style>
            <div class="max-w-screen-2xl px-4 lg:px-24 mx-auto content">
                <div class="text-center section-heading mb-16">
                    <div class="mb-3 text-4xl font-bold leading-relaxed text-blackText-2 lg:text-6xl"> Why choose us
                    </div>
                    <div class="text-lg font-medium text-gray-7"> House is comitted to helping its clients to reach
                        their goals </div>
                </div>
                <div class="grid justify-center grid-cols-6 gap-10 text-left section-element lg:grid-cols-12 md:gap-2">
                    <!-- TAX ADVANTAGE -->
                    <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                        <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                            <div
                                class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes-color.svg"
                                    alt="house" class="color" width="76" /> </div>
                            <div> <img class="non-color" width="76"
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/taxes.svg"
                                    alt="house" /> </div>
                            <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> Tax Advantage </div>
                            <div class="text-base font-normal leading-7 text-gray-7"> Tax advantage which applies to
                                certain accounts or investments. </div>
                        </div>
                    </div> <!-- PROPERTY INSURANCE -->
                    <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                        <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                            <div
                                class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user-color.svg"
                                    alt="house" class="color" /> </div>
                            <div> <img class="non-color"
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/user.svg"
                                    alt="house" /> </div>
                            <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> Property Insurance </div>
                            <div class="text-base font-normal leading-7 text-gray-7"> A series of policies that offer
                                either property protection of liability coverage. </div>
                        </div>
                    </div> <!-- LOWEST COMMISSION -->
                    <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                        <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                            <div
                                class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount-color.svg"
                                    alt="house" class="color" /> </div>
                            <div> <img class="non-color"
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/discount.svg"
                                    alt="house" /> </div>
                            <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> Lowest Commission </div>
                            <div class="text-base font-normal leading-7 text-gray-7"> No longer have to negotiate
                                commissions and haggle with other agents. </div>
                        </div>
                    </div> <!-- HOUSE NOW-->
                    <div class="col-span-6 mr-0 md:col-span-3 md:mr-1">
                        <div class="px-8 transition duration-700 ease-out py-7 rounded-3xl hover:bg-white cardShadow">
                            <div
                                class="absolute transition duration-700 ease-out opacity-0 hover:opacity-100 icon-placeholder">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar-color.svg"
                                    alt="house" class="color" width="62" /> </div>
                            <div> <img class="non-color" width="62"
                                    src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-House/calendar.svg"
                                    alt="house" /> </div>
                            <div class="mt-6 mb-1 text-base font-bold text-blue-primary"> House Now </div>
                            <div class="text-base font-normal leading-7 text-gray-7"> Easy booking system for a host.
                                Try our innovative model. </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

</html>
