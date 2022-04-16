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
        <section>
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Red+Hat+Display:wght@400;500;600;700&display=swap");

                :root {
                    --light-1: #FFFFFF;
                    --light-2: #F9FAFE;
                    --light-3: #FAFAFD;

                    --dark-1: #16171C;
                    --dark-2: #494C57;
                    --dark-3: #171717;
                    --dark-4: #202020;
                    --dark-5: #151515;
                    --dark-6: #0F0F0F;

                    --subtleGrey-1: #F8F8FC;
                    --subtleGrey-2: #989DB1;
                    --subtleGrey-3: #8D8F98;
                    --subtleGrey-4: #9A9A9A;
                    --subtleGrey-5: #CED2DE;

                    --subtleBlue-1: #34B3FF;
                    --subtleBlue-2: #518CFF;
                    --subtleBlue-3: #4376DB;
                    --subtleBlue-4: #CCE3FF;

                    --subtleGreen-1: #00B67A;

                    --lemonYellow: #F2FF57;
                    --deepGrey: #2E2E2E;
                    --navy-1: #313E60;
                    --navy-2: #1C3055;
                }

                .font-display {
                    font-family: 'Red Hat Display', sans-serif;
                }

                .font-body {
                    font-family: 'Inter', sans-serif;
                }

                .text-subtleBlue-2 {
                    color: var(--subtleBlue-2);
                }

                .text-dark-1 {
                    color: var(--dark-1);
                }

                .text-dark-2 {
                    color: var(--dark-2);
                }

                .text-dark-3 {
                    color: var(--dark-3);
                }

                .text-dark-4 {
                    color: var(--dark-4);
                }

                .text-dark-5 {
                    color: var(--dark-5);
                }

                .text-subtleBlue-1 {
                    color: var(--subtleBlue-1);
                }

                .text-subtleGrey-3 {
                    color: var(--subtleGrey-3);
                }

                @media(max-width: 768px) {
                    .bg-subtleBlue-1 {
                        background-color: var(--subtleBlue-1);
                    }
                }

                .bg-header-gradient {
                    background: linear-gradient(180deg, var(--light-2) 0%, var(--light-1) 100%);
                }

                .bg-subtleGreen {
                    background-color: var(--subtleGreen-1);
                }

                .bg-subtleGrey-1 {
                    background-color: var(--subtleGrey-1);
                }

                .w-screen-3xl {
                    width: 1696px;
                }

                .form-placeholder {
                    padding: 52px;
                    box-shadow: -32px 48px 60px rgba(22, 23, 28, 0.04);

                }

                @media(min-width: 768px) {
                    .form-placeholder {
                        width: 465px;
                    }
                }

                select:invalid {
                    color: var(--subtleGrey-2);
                }

                select:valid {
                    color: var(--dark-1);
                }

                select:invalid option,
                select:valid option {
                    margin: 12px 0;
                    font-weight: 500;
                    color: var(--dark-1);
                }

                .z-min1 {
                    z-index: -1;
                }

                .form-select-icon {
                    background-repeat: no-repeat;
                    background-image: url('https://api.elements.buildwithangga.com/storage/files/2/assets/Header/HeaderFinance-1/dropdownArrowLight.svg');
                    background-size: 12px;
                    background-position: calc(100% - 20px) center;
                }

            </style>

            <header class="pt-10 font-body bg-no-repeat overflow-hidden relative">
                <!-- background ornament -->
                <div class="hidden mx-auto hero-bg w-screen-3xl lg:block">
                    <div class="flex justify-end">
                        <svg width="756" height="972" viewBox="0 0 756 972" class="absolute top-0 -mt-52 z-min1"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle r="378" transform="matrix(1 0 0 -1 378.001 594)" fill="#518CFF" />
                            <circle r="378" transform="matrix(1 0 0 -1 378.001 486)" fill="#75E5FE" />
                            <circle r="378" transform="matrix(1 0 0 -1 378.001 378)" fill="#313E60" />
                        </svg>
                    </div>
                </div>

                <!-- hero -->
                <section
                    class="max-w-screen-2xl px-4 lg:px-24 mx-auto hero grid items-center grid-cols-1 gap-12 mt-24 md:grid-cols-6 lg:grid-cols-12">
                    <!-- LEFT PART -->
                    <div class="col-span-1 md:col-span-6">
                        <div
                            class="text-6xl font-bold leading-snug headline font-display md:text-7xl text-dark-1 md:leading-tight">
                            Bangun Usahamu dan Tingkatkan <span class="text-subtleBlue-1">Finance Kehidupanmu</span>
                        </div>
                        <div class="text-xl font-normal leading-8 text-dark-2 md:text-2xl md:leading-9 mt-7">
                            Pengaturan Produk lebih cepat, lebih
                            mudah dan lebih memaksimalkan keuntungan kamu !
                            <br class="hidden lg:block"> Atur Produk Usahamu dimulai dar sini
                        </div>
                        <div class="grid grid-cols-1 mt-20 md:grid-cols-12">
                            <div class="inline-flex items-center col-span-1 mb-3 md:col-span-6">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1328 1.30005L4.88281 9.55005L1.13281 5.80005" stroke="#00B67A"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-4 font-normal text-dark-2">Menjadi Vendor Terpercaya</p>
                            </div>
                            <div class="inline-flex items-center col-span-1 mb-3 md:col-span-6">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1328 1.30005L4.88281 9.55005L1.13281 5.80005" stroke="#00B67A"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-4 font-normal text-dark-2">Free Potongan </p>
                            </div>
                            <div class="inline-flex items-center col-span-1 mb-3 md:col-span-6">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1328 1.30005L4.88281 9.55005L1.13281 5.80005" stroke="#00B67A"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-4 font-normal text-dark-2">100% Transaparan</p>
                            </div>
                            <div class="inline-flex items-center col-span-1 mb-3 md:col-span-6">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.1328 1.30005L4.88281 9.55005L1.13281 5.80005" stroke="#00B67A"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="ml-4 font-normal text-dark-2">Bermitra 180+ Vendor DiKota Jambi</p>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT PART -->
                    <div class="col-span-1 md:col-span-6">
                        @if ($errors->any())
                        <div class="mb-5" role="alert">
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                There's something wrong!
                            </div>
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                <p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </p>
                            </div>
                        </div>
                        @endif
                        <form class="w-full" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="w-full form-placeholder bg-white dark:bg-dark-3 rounded-xl">
                                <div class="flex flex-wrap -mx-3 mb-6 hidden">
                                    <div class="w-full px-3 ">
                                        <label
                                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                            for="grid-last-name">
                                            User produk
                                        </label>
                                        <select name="users_id"
                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            id="grid-last-name">
                                            <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <label class="block mb-7">
                                    <span class="font-normal text-dark-2">Nama Vendor</span>
                                    <input type="text" value="{{ old('name_vendor') }}" name="name_vendor"
                                        class="block w-full px-5 py-4 mt-3 font-semibold rounded-lg text-dark-1 dark:text-white bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4"
                                        placeholder="Vendor Saya" />
                                </label>
                                <label class="block mb-7">
                                    <span class="font-normal text-dark-2 dark:text-subtleGrey-5">Provinsi Vendor</span>
                                    <input type="text" type="text" value="{{ old('provinsi_vendor') }}"
                                        name="provinsi_vendor"
                                        class="block w-full px-5 py-4 mt-3 font-semibold rounded-lg text-dark-1 dark:text-white bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4"
                                        placeholder="Your Province" />
                                </label>
                                <label class="block mb-7">
                                    <span class="font-normal text-dark-2 dark:text-subtleGrey-5">Kota Vendor</span>
                                    <input type="text" type="text" value="{{ old('kota_vendor') }}" name="kota_vendor"
                                        class="block w-full px-5 py-4 mt-3 font-semibold rounded-lg text-dark-1 dark:text-white bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4"
                                        placeholder="Your City" />
                                </label>
                                <label class="block mb-7">
                                    <span class="font-normal text-dark-2 dark:text-subtleGrey-5">Alamat Vendor</span>
                                    <input type="text" type="text" value="{{ old('alamat_vendor') }}"
                                        name="alamat_vendor"
                                        class="block w-full px-5 py-4 mt-3 font-semibold rounded-lg text-dark-1 dark:text-white bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4"
                                        placeholder="Your Address" />
                                </label>
                                <label class="block mb-9">
                                    <span class="font-normal text-dark-2 dark:text-subtleGrey-5">
                                        Lama Berdiri Vendor</span>
                                    <select name="umur_vendor"
                                        class="form-select-icon block w-full px-5 py-4 mt-3 font-semibold bg-no-repeat rounded-lg appearance-none bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5"
                                        required>
                                        <option value="{{ old('umur_vendor') }}" disabled selected hidden>Select
                                            business category
                                        </option>
                                        <option value="6 Bulan">6 Bulan</option>
                                        <option value="1 Tahun +">1 Tahun +</option>
                                        <option value="5 Tahun +">5 Tahun + </option>
                                        <option value="12 Tahun +">12 Tahun + </option>
                                    </select>
                                </label>
                                <label class="block mb-9">
                                    <span class="font-normal text-dark-2 dark:text-subtleGrey-5">
                                        Total Acara yang sudah di handle</span>
                                    <select name="total_acara"
                                        class="form-select-icon block w-full px-5 py-4 mt-3 font-semibold bg-no-repeat rounded-lg appearance-none bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5"
                                        required>
                                        <option value="{{ old('total_acara') }}" disabled selected hidden>Select
                                            business category
                                        </option>
                                        <option value="10">10</option>
                                        <option value="20">20 </option>
                                        <option value="30">30 </option>
                                        <option value="50 ">50 </option>
                                    </select>
                                </label>
                                <label class="block mb-9">
                                    <span class="font-normal text-dark-2 dark:text-subtleGrey-5">
                                        Category</span>
                                    <select name="kategori_vendor"
                                        class="form-select-icon block w-full px-5 py-4 mt-3 font-semibold bg-no-repeat rounded-lg appearance-none bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-white dark:focus:bg-dark-5"
                                        required>
                                        <option value="{{ old('kategori_vendor') }}" disabled selected hidden>Select
                                            business category
                                        </option>
                                        <option value="Katering">Katering</option>
                                        <option value="Band / Organ">Band / Organ</option>
                                        <option value="M.U.A">M.U.A</option>
                                        <option value="Dekorasi">Dekorasi</option>
                                        <option value="Hena">Hena</option>
                                        <option value="Master Ceremony">Master Ceremony</option>
                                        <option value="Lighting">Lighting</option>
                                        <option value="Hantaran">Hantaran</option>
                                        <option value="Undangan">Undangan</option>

                                    </select>
                                </label>
                                <button type="submit"
                                    class="block mx-6 py-4 text-base font-bold text-center rounded-lg bg-subtleGreen text-white focus:ring-2">
                                    <p
                                        class="block mx-20 py- text-base font-bold text-center rounded-lg bg-subtleGreen text-white focus:ring-2">
                                        Daftar Sekarang
                                    </p>
                                </button>
                                <div class="flex flex-row items-start mt-6 space-x-3">
                                    <div class="mt-1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 15C15.866 15 19 11.866 19 8C19 4.13401 15.866 1 12 1C8.13401 1 5 4.13401 5 8C5 11.866 8.13401 15 12 15Z"
                                                stroke="#8D8F98" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8.21 13.89L7 23L12 20L17 23L15.79 13.88" stroke="#8D8F98"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-normal leading-5 text-subtleGrey-3">
                                            Berlisensi dan diatur oleh Otoritas Jasa Keuangan, Departemen Bea dan Cukai
                                            Indonesia dan Bank Indonesia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </header>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script>
                // Navbar toggling animation
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

        </section>
    </body>

</html>
