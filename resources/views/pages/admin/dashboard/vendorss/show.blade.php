@extends('layouts.admin')

@section('Dashboard-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard-Admin-MitraVendor-Weps ') }}

    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0">
    </div>
</div>
<!-- Main content header -->


<!-- Start Content -->

<div class="py-1">
    <div class=" flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
        <div class="mb-10">
            <a href="{{ route('dashboard.vendor.index') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                Kembali
            </a>
        </div>
    </div>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div x-data="{ image: 1 }" x-cloak>
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                        <div x-show="image === 1"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">

                            <span class="text-5xl"></span>
                        </div>

                        <div x-show="image === 2"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">2</span>
                        </div>

                        <div x-show="image === 3"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">3</span>
                        </div>

                        <div x-show="image === 4"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">4</span>
                        </div>
                    </div>

                    <div class="flex -mx-2 mb-4">
                        <template x-for="i in 4">
                            <div class="flex-1 px-2">
                                <button x-on:click="image = i"
                                    :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                    class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                    <span x-text="i" class="text-2xl"></span>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                    {{$vendors->name}}</h2>
                <p class="text-gray-500 text-sm">By <a href="#"
                        class="text-indigo-600 hover:underline">{{$vendors->users->name}}</a>
                </p>

                <h1 class="pt-4 text-gray-500">Email Vendor</h1>
                <p class="text-gray-500 "> {{$vendors->users->email}}
                </p>

                <h1 class="pt-4 text-gray-500">Contact Vendor</h1>
                <p class="text-gray-500 "> {{$vendors->users->phone}}
                </p>

                <h1 class="pt-4 text-gray-500">Alamat Vendor </h1>
                <p class="text-gray-500 "> {{$vendors->users->address}}
                </p>
            </div>
        </div>
    </div>

    <div class="mapouter max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="gmap_canvas"><iframe width="1000" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=-1.662218,%20103.614491&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://fmovies-online.net">fmovies</a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: center;
                    height: 500px;
                    width: 1000px;
                }

            </style><a href="https://www.embedgooglemap.net">embed google map responsive</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 1000px;
                }

            </style>
        </div>
    </div>
</div>

<!-- START: DETAILS -->

<!-- END: DETAILS -->
@endsection
