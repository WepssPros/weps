<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'weps') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


        <style>
            /*Form fields*/
            .dataTables_wrapper select,
            .dataTables_wrapper .dataTables_filter input {
                color: #4a5568;
                /*text-gray-700*/
                padding-left: 1rem;
                /*pl-4*/
                padding-right: 1rem;
                /*pl-4*/
                padding-top: .5rem;
                /*pl-2*/
                padding-bottom: .5rem;
                /*pl-2*/
                line-height: 1.25;
                /*leading-tight*/
                border-width: 2px;
                /*border-2*/
                border-radius: .25rem;
                border-color: #edf2f7;
                /*border-gray-200*/
                background-color: #edf2f7;
                /*bg-gray-200*/
            }

            /*Row Hover*/
            table.dataTable.hover tbody tr:hover,
            table.dataTable.display tbody tr:hover {
                background-color: #ebf4ff;
                /*bg-indigo-100*/
            }

            /*Pagination Buttons*/
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                border: 1px solid transparent;
                /*border border-transparent*/
            }

            /*Pagination Buttons - Current selected */
            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                color: #fff !important;
                /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
                /*shadow*/
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                background: #667eea !important;
                /*bg-indigo-500*/
                border: 1px solid transparent;
                /*border border-transparent*/
            }

            /*Pagination Buttons - Hover */
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                color: #fff !important;
                /*text-white*/
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
                /*shadow*/
                font-weight: 700;
                /*font-bold*/
                border-radius: .25rem;
                /*rounded*/
                background: #667eea !important;
                /*bg-indigo-500*/
                border: 1px solid transparent;
                /*border border-transparent*/
            }

            /*Add padding to bottom border */
            table.dataTable.no-footer {
                border-bottom: 1px solid #e2e8f0;
                /*border-b-1 border-gray-300*/
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }

            /*Change colour of responsive icon*/
            table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
            table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
                background-color: #667eea !important;
                /*bg-indigo-500*/
            }

        </style>

        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>


    </head>

    <body class="font-sans antialiased">
        <x-jet-banner />
        <div>
            <div class="flex h-screen overflow-y-hidden bg-white" x-data="setup()"
                x-init="$refs.loading.classList.add('hidden')">
                <!-- Loading screen -->
                <div x-ref="loading"
                    class="fixed inset-0 z-50 flex items-center justify-center text-white bg-black bg-opacity-50"
                    style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                    Loading.....
                </div>

                <!-- Sidebar backdrop -->
                <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
                    style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

                <!-- Sidebar -->
                <aside x-transition:enter="transition transform duration-300"
                    x-transition:enter-start="-translate-x-full opacity-30  ease-in"
                    x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                    x-transition:leave="transition transform duration-300"
                    x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                    x-transition:leave-end="-translate-x-full opacity-0 ease-in"
                    class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
                    :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}">
                    <!-- sidebar header -->
                    <div class="flex items-center justify-between flex-shrink-0 p-2"
                        :class="{'lg:justify-center': !isSidebarOpen}">
                        <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">

                            <x-jet-application-mark class="block h-9 w-auto" />

                            <span :class="{'lg:hidden': !isSidebarOpen} ">Weps-Group</span>
                        </span>
                        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>


                    <!-- Sidebar links -->
                    <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
                        <ul class="p-2 overflow-hidden">
                            <li>
                                <a href="{{ route('dashboard.vendors.index') }}"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                    :class="{'justify-center': !isSidebarOpen}">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="24" height="24"
                                            x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="M23.9,11.437A12,12,0,0,0,0,13a11.878,11.878,0,0,0,3.759,8.712A4.84,4.84,0,0,0,7.113,23H16.88a4.994,4.994,0,0,0,3.509-1.429A11.944,11.944,0,0,0,23.9,11.437Zm-4.909,8.7A3,3,0,0,1,16.88,21H7.113a2.862,2.862,0,0,1-1.981-.741A9.9,9.9,0,0,1,2,13,10.014,10.014,0,0,1,5.338,5.543,9.881,9.881,0,0,1,11.986,3a10.553,10.553,0,0,1,1.174.066,9.994,9.994,0,0,1,5.831,17.076ZM7.807,17.285a1,1,0,0,1-1.4,1.43A8,8,0,0,1,12,5a8.072,8.072,0,0,1,1.143.081,1,1,0,0,1,.847,1.133.989.989,0,0,1-1.133.848,6,6,0,0,0-5.05,10.223Zm12.112-5.428A8.072,8.072,0,0,1,20,13a7.931,7.931,0,0,1-2.408,5.716,1,1,0,0,1-1.4-1.432,5.98,5.98,0,0,0,1.744-5.141,1,1,0,0,1,1.981-.286Zm-5.993.631a2.033,2.033,0,1,1-1.414-1.414l3.781-3.781a1,1,0,1,1,1.414,1.414Z"
                                                    fill="#3b4e5d" data-original="#000000" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span :class="{ 'lg:hidden': !isSidebarOpen }"> {{ __('Dashboard') }}</span>
                                </a>
                            </li>
                            <!-- Sidebar Links... -->
                        </ul>
                        <ul class="p-2 overflow-hidden">
                            <li>
                                <a href="{{ route('dashboard.vendors.product.index') }}"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                    :class="{'justify-center': !isSidebarOpen}" <span>
                                    <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" id="Outline"
                                        viewBox="0 0 24 24" width="24" height="24">
                                        <path
                                            d="M24,10a.988.988,0,0,0-.024-.217l-1.3-5.868A4.968,4.968,0,0,0,17.792,0H6.208a4.968,4.968,0,0,0-4.88,3.915L.024,9.783A.988.988,0,0,0,0,10v1a3.984,3.984,0,0,0,1,2.643V19a5.006,5.006,0,0,0,5,5H18a5.006,5.006,0,0,0,5-5V13.643A3.984,3.984,0,0,0,24,11ZM2,10.109l1.28-5.76A2.982,2.982,0,0,1,6.208,2H7V5A1,1,0,0,0,9,5V2h6V5a1,1,0,0,0,2,0V2h.792A2.982,2.982,0,0,1,20.72,4.349L22,10.109V11a2,2,0,0,1-2,2H19a2,2,0,0,1-2-2,1,1,0,0,0-2,0,2,2,0,0,1-2,2H11a2,2,0,0,1-2-2,1,1,0,0,0-2,0,2,2,0,0,1-2,2H4a2,2,0,0,1-2-2ZM18,22H6a3,3,0,0,1-3-3V14.873A3.978,3.978,0,0,0,4,15H5a3.99,3.99,0,0,0,3-1.357A3.99,3.99,0,0,0,11,15h2a3.99,3.99,0,0,0,3-1.357A3.99,3.99,0,0,0,19,15h1a3.978,3.978,0,0,0,1-.127V19A3,3,0,0,1,18,22Z"
                                            fill="#3b4e5d" data-original="#000000" />
                                    </svg>
                                    </span>
                                    <span :class="{ 'lg:hidden': !isSidebarOpen }"> {{ __('Produk') }}</span>
                                </a>
                            </li>
                            <!-- Sidebar Links... -->
                        </ul>
                        <ul class="p-2 overflow-hidden">
                            <li>
                                <a href="{{ route('dashboard.vendors.transaction.index')}}"
                                    class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                                    :class="{'justify-center': !isSidebarOpen}" <span>
                                    {{-- tarok SVG --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="24"
                                        height="24">
                                        <circle cx="5.5" cy="15.5" r="1.5" />
                                        <path
                                            d="M19,3H5A5.006,5.006,0,0,0,0,8v8a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V8A5.006,5.006,0,0,0,19,3ZM5,5H19a3,3,0,0,1,3,3H2A3,3,0,0,1,5,5ZM19,19H5a3,3,0,0,1-3-3V10H22v6A3,3,0,0,1,19,19Z"
                                            fill="#3b4e5d" data-original="#000000" />
                                    </svg>
                                    </span>
                                    <span :class="{ 'lg:hidden': !isSidebarOpen }">Laporan Transaksi</span>
                                </a>
                            </li>
                            <!-- Sidebar Links... -->
                        </ul>

                    </nav>

                    <!-- Sidebar footer + Loqout Settings-->
                    <div class="flex-shrink-0 p-2 border-t max-h-14">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring"
                                href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                                <span>
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </span>
                                <span :class="{'lg:hidden': !isSidebarOpen}"> {{ __('Log Out') }}</span>
                            </button>
                        </form>
                    </div>
                </aside>

                <div class="flex flex-col flex-1 h-full overflow-hidden">
                    <!-- Navbar -->
                    <header class="flex-shrink-0 border-b">
                        <div class="flex items-center justify-between p-2">
                            <!-- Navbar left -->
                            <div class="flex items-center space-x-3">
                                <span
                                    class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">Weps-Group</span>
                                <!-- Toggle sidebar button -->
                                <button @click="toggleSidbarMenu()"
                                    class="p-2 rounded-md focus:outline-none focus:ring">
                                    <svg class="w-4 h-4 text-gray-600"
                                        :class="{'transform transition-transform -rotate-180': isSidebarOpen}"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                    </svg>
                                </button>
                                <!-- Toggle sidebar button  Tutup -->
                            </div>
                            <!-- Navbar right -->
                            <div class="relative flex items-center space-x-3">
                                <div class="items-center hidden space-x-3 md:flex">
                                    <!-- Notification Button -->
                                    <div class="relative" x-data="{ isOpen: false }">
                                        <!-- red dot -->
                                        <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                                        <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                                        <button @click="isOpen = !isOpen"
                                            class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown card -->
                                        <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                            class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                            <div class="p-4 font-medium border-b">
                                                <span class="text-gray-800">Notification</span>
                                            </div>
                                            <ul class="flex flex-col p-2 my-2 space-y-1">
                                                <li>
                                                    <a href="#"
                                                        class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                                        Link</a>
                                                </li>
                                            </ul>
                                            <div
                                                class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                                <a href="#">See All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notification Button -->
                                </div>

                                <!-- Profile button -->
                                <div class="relative" x-data="{ isOpen: false }">
                                    <button @click="isOpen = !isOpen"
                                        class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />
                                    </button>
                                    <!-- green dot -->
                                    <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping">
                                    </div>
                                    <div
                                        class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3">
                                    </div>

                                    <!-- Dropdown card -->
                                    <div @click.away="isOpen = false" x-show.transition.opacity="isOpen"
                                        class="absolute mt-3 transform -translate-x-full bg-white rounded-md shadow-lg min-w-max">
                                        <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                            <span class="text-sm text-gray-800 ">Nama Lengkap :</span>
                                            <x-jet-dropdown-link href=""
                                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                                <svg class="w-6 h-6  text-gray-500 flex-shrink- group-hover:text-gray-900 transition duration-75"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-sm pl-2 text-gray-800 "> {{ Auth::user()->name }}
                                                    </span>
                                                </svg>

                                            </x-jet-dropdown-link>

                                            <span class="text-sm text-gray-800 ">Username : </span>

                                            <x-jet-dropdown-link href=""
                                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                                <svg class="w-6 h-6  text-gray-500 flex-shrink- group-hover:text-gray-900 transition duration-75"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-sm pl-2 text-gray-800 ">
                                                        {{ Auth::user()->username }} </span>
                                                </svg>

                                            </x-jet-dropdown-link>

                                            <span class="text-sm text-gray-800 ">Email : </span>

                                            <x-jet-dropdown-link href=""
                                                class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                                <svg class="w-6 h-6  text-gray-500 flex-shrink- group-hover:text-gray-900 transition duration-75"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="text-sm pl-2 text-gray-800 "> {{ Auth::user()->email }}
                                                    </span>
                                                </svg>

                                            </x-jet-dropdown-link>


                                            <span class="text-sm text-gray-400"> </span>
                                        </div>

                                        <ul class="flex flex-col p-2 my-2 space-y-1">

                                            <li>
                                                <x-jet-dropdown-link href="{{ route('profile.show') }}"
                                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                                    <svg class="w-6 h-6  text-gray-500 flex-shrink- group-hover:text-gray-900 transition duration-75"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                                            clip-rule="evenodd">

                                                        </path>
                                                        <span class="text-sm pl-2 text-gray-800 ">
                                                            {{ __('Setting Profile') }} </span>
                                                    </svg>

                                                </x-jet-dropdown-link>
                                            </li>

                                        </ul>
                                        <div
                                            class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                                    <svg class="w-6 h-6  text-gray-500 flex-shrink- group-hover:text-gray-900 transition duration-75"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                            </path>
                                                        </svg>

                                                        <span class="text-sm pl-2 text-gray-800 ">
                                                            {{ __('Log Out') }}</span>
                                                    </svg>

                                                </x-jet-dropdown-link>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile button Tutups -->

                            </div>
                        </div>
                    </header>
                    <!-- Navbar -->

                    <!-- Main content -->
                    <main class="flex-1 max-h-full p-5 overflow-hidden overflow-y-scroll bg-gray-50">

                        @yield('Dashboard.vendor-Content')

                    </main>

                    <!-- Main footer -->
                    <footer class="flex items-center justify-between flex-shrink-0 p-4 border-t max-h-14">
                        <div>Weps-Group &copy; 2021</div>
                        <div class="text-sm">
                            Made by
                            <a class="text-blue-400 underline" href="https://github.com/WepssPros" target="_blank"
                                rel="noopener noreferrer">Reyhan Dwi Amberta</a>
                        </div>
                        <div>
                            <!-- Github svg -->
                            <a href="https://github.com/WepssPros?tab=repositories" target="_blank"
                                class="flex items-center space-x-1">
                                <svg class="w-6 h-6 text-gray-400" viewBox="0 0 16 16" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                                    </path>
                                </svg>
                                <span class="hidden text-sm md:block">View on Github</span>
                            </a>
                        </div>
                    </footer>
                </div>



            </div>

        </div>

        @stack('modals')

        @livewireScripts

    </body>



    <script>
        const setup = () => {
            return {
                loading: true,
                isSidebarOpen: false,
                toggleSidbarMenu() {
                    this.isSidebarOpen = !this.isSidebarOpen
                },
                isSettingsPanelOpen: false,
                isSearchBoxOpen: false,
            }
        }

    </script>

</html>
