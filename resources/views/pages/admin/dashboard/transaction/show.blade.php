@extends('layouts.admin')

@section('Dashboard-Content')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
    [x-cloak] {
        display: none;
    }

    @media print {
        .no-printme {
            display: none;
        }

        .printme {
            display: block;
        }

        body {
            line-height: 1.2;
        }
    }

    @page {
        size: A4 portrait;
        counter-increment: page;
    }

    /* Datepicker */
    .date-input {
        background-color: #fff;
        border-radius: 10px;
        padding: 0.5rem 1rem;
        z-index: 2000;
        margin: 3px 0 0 0;
        border-top: 1px solid #eee;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .date-input.is-hidden {
        display: none;
    }

    .date-input .pika-title {
        padding: 0.5rem;
        width: 100%;
        text-align: center;
    }

    .date-input .pika-prev,
    .date-input .pika-next {
        margin-top: 0;
        /* margin-top: 0.5rem; */
        padding: 0.2rem 0;
        cursor: pointer;
        color: #4299e1;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    .date-input .pika-prev:hover,
    .date-input .pika-next:hover {
        text-decoration: underline;
    }

    .date-input .pika-prev {
        float: left;
    }

    .date-input .pika-next {
        float: right;
    }

    .date-input .pika-label {
        display: inline-block;
        font-size: 0;
    }

    .date-input .pika-select-month,
    .date-input .pika-select-year {
        display: inline-block;
        border: 1px solid #ddd;
        color: #444;
        background-color: #fff;
        border-radius: 10px;
        font-size: 0.9rem;
        padding-left: 0.5em;
        padding-right: 0.5em;
        padding-top: 0.25em;
        padding-bottom: 0.25em;
        appearance: none;
    }

    .date-input .pika-select-month:focus,
    .date-input .pika-select-year:focus {
        border-color: #cbd5e0;
        outline: none;
    }

    .date-input .pika-select-month {
        margin-right: 0.25em;
    }

    .date-input table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 0.2rem;
    }

    .date-input table th {
        width: 2em;
        height: 2em;
        font-weight: normal;
        color: #718096;
        text-align: center;
    }

    .date-input table th abbr {
        text-decoration: none;
    }

    .date-input table td {
        padding: 2px;
    }

    .date-input table td button {
        /* border: 1px solid #e2e8f0; */
        width: 1.8em;
        height: 1.8em;
        text-align: center;
        color: #555;
        border-radius: 10px;
    }

    .date-input table td button:hover {
        background-color: #bee3f8;
    }

    .date-input table td.is-today button {
        background-color: #ebf8ff;
    }

    .date-input table td.is-selected button {
        background-color: #3182ce;
    }

    .date-input table td.is-selected button {
        color: white;
    }

    .date-input table td.is-selected button:hover {
        color: white;
    }

</style>
<div class="antialiased sans-serif min-h-screen bg-white" style="min-height: 900px">
    <div class="border-t-8 border-gray-700 h-2"></div>
    <div class="container mx-auto py-6 px-4" x-data="invoices()" x-init="generateInvoiceNumber(111111, 999999);"
        x-cloak>
        <div class="flex justify-between">
            <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Pesanan :
                {{ $transaction->user->name }}</h2>
            <div>
                <div class="relative mr-4 inline-block">
                    <div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center"
                        @mouseenter="showTooltip = true" @mouseleave="showTooltip = false" @click="printInvoice()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                            <rect x="7" y="13" width="10" height="8" rx="2" />
                        </svg>
                    </div>
                    <div x-show.transition="showTooltip"
                        class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
                        Print this invoice!
                    </div>
                </div>

                <div class="relative inline-block">
                    <div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center"
                        @mouseenter="showTooltip2 = true" @mouseleave="showTooltip2 = false"
                        @click="window.location.reload()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -5v5h5" />
                            <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 5v-5h-5" />
                        </svg>
                    </div>
                    <div x-show.transition="showTooltip2"
                        class="z-40 shadow-lg text-center w-32 block absolute right-0 top-0 p-2 mt-12 rounded-lg bg-gray-800 text-white text-xs">
                        Reload Page
                    </div>
                </div>
            </div>
        </div>

        <div class="flex mb-8 justify-between">
            <div class="w-2/4">
                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Pemesanan
                        No.</label>
                    <span class="mr-4 md:block">:</span>
                    <div class="flex-1">
                        <div class="p-2">
                            <div
                                class="inline-flex items-center bg-white leading-none text-gray-800 rounded-full p-2 shadow text-teal text-sm">
                                <span
                                    class="inline-flex bg-indigo-600 text-white rounded-full h-6 px-3 justify-center items-center">Weps
                                    - </span>
                                <span class="inline-flex px-2"> {{ $transaction->id}} </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Tanggal Acara
                    </label>
                    <span class="mr-4  md:block">:</span>
                    <div class="flex-1">
                        <div class="p-2">
                            <div
                                class="inline-flex items-center bg-white leading-none text-gray-800 rounded-full p-2 shadow text-teal text-sm">
                                <span
                                    class="inline-flex bg-indigo-600 text-white rounded-full h-6 px-3 justify-center items-center">Weps
                                    - </span>
                                <span class="inline-flex px-2"> {{ $transaction->tgl_acara}} </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-2 md:mb-1 md:flex items-center">
                    <label class="w-32 text-gray-800 block font-bold text-sm uppercase tracking-wide">Tanggal
                        Pemesanan</label>
                    <span class="mr-4  md:block">:</span>
                    <div class="flex-1">
                        <div class="p-2">
                            <div
                                class="inline-flex items-center bg-white leading-none text-gray-800 rounded-full p-2 shadow text-teal text-sm">
                                <span
                                    class="inline-flex bg-indigo-600 text-white rounded-full h-6 px-3 justify-center items-center">Weps
                                    - </span>
                                <span class="inline-flex px-2"> {{ $transaction->created_at}} </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
                    <img id="image" class="object-cover w-full h-32" src="https://placehold.co/300x300/e2e8f0/e2e8f0" />

                    <div class="absolute top-0 left-0 right-0 bottom-0 w-full  cursor-pointer flex items-center justify-center"
                        onClick="document.getElementById('fileInput').click()">
                        <button type="button" style="background-color: rgba(255, 255, 255, 0.65)"
                            class="hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path
                                    d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                <circle cx="12" cy="13" r="3" />
                            </svg>
                        </button>
                    </div>
                </div>
                <input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0];
					var reader = new FileReader();

					reader.onload = function (e) {
						document.getElementById('image').src = e.target.result;
						document.getElementById('image2').src = e.target.result;
					};

					reader.readAsDataURL(file);
				">
            </div>
        </div>

        <div class="flex flex-wrap justify-between mb-8">
            <div class="w-full md:w-1/3 mb-2 md:mb-0">
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Pesanan Untuk
                    Acara:</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1 border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->user->name}}
                </div>

                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Alamat User:</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->user->address}}
                </div>
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Username</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->user->username}}
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Dari:</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1 border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    Zhafirah Catering
                </div>

                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Alamat</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1 border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    Perumahan Teguh Permai Block D no 11
                </div>
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Contact</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    +62 822 4666 8262
                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-between mb-8">
            <div class="w-full md:w-1/3 mb-2 md:mb-0">
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Nama Acara :</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1 border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->name_acara}}
                </div>

                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Alamat Acara:</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->address}}
                </div>
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">No Telephone</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->user->phone}}
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Payment:</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1 border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->payment}}
                </div>

                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Status</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1 border-b border-grey cursor-pointer hover:bg-gray-200-lighter font-bold">
                    {{$transaction->status}}
                </div>
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Deposit</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    Rp. {{number_format($transaction->deposito)}}
                </div>
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Biaya
                    Pelayanan</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    Rp. {{number_format($transaction->shipping_price)}}
                </div>
                <label class="text-gray-800 block mb-1 font-bold text-sm uppercase tracking-wide">Update
                    Pemesanan</label>
                <div
                    class="bg-gray-200 p-2 rounded mt-1  mb-1  border-b border-grey cursor-pointer hover:bg-gray-200-lighter">
                    {{$transaction->updated_at}}
                </div>

            </div>
        </div>


        <div class="flex -mx-1 border-b py-2 items-start">
            <div class="flex-1 px-1">
                <p class="text-gray-800 uppercase tracking-wide text-sm font-bold">Deskripsi Pembayaran</p>
            </div>

            <div class="px-1 w-32 text-right">
                <p class="leading-none">
                    <span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Nama Pemesan</span>
                    <span class="font-medium text-xs text-gray-500">{{$transaction->user->name}}</span>
                </p>
            </div>


            <div class="px-1 w-32 text-right">
                <p class="leading-none">
                    <span class="block uppercase tracking-wide text-sm font-bold text-gray-800">Biaya layanan</span>
                    <span
                        class="font-medium text-xs text-gray-500">(Rp.{{number_format($transaction->shipping_price)}})</span>
                </p>
            </div>
            <div class="px-1 w-20 text-center">
            </div>
        </div>

        <div class="py-2 ml-auto mt-5 w-full sm:w-2/4 lg:w-1/4">
            <div class="flex justify-between mb-3">
                <div class="text-gray-800 text-right flex-1">Total Price</div>
                <div class="text-right w-40">
                    <div class="text-gray-800 font-medium">Rp.{{number_format($transaction->total_price)}}
                    </div>
                </div>
            </div>
            <div class="flex justify-between mb-4">
                <div class="text-sm text-green-600 text-right flex-1 font-bold ">Deposit</div>
                <div class="text-right w-40">
                    <div class="text-sm text-gray-600">Rp.{{number_format($transaction->deposito)}}</div>
                </div>
            </div>

            <div class="py-2 border-t border-b">
                <div class="flex justify-between">
                    <div class="text-xl text-red-600 font-semibold text-right flex-1">Sisa Pembayaran</div>
                    <div class="text-right w-40">
                        <div class="text-xl text-gray-800 font-bold">
                            Rp.{{number_format($transaction->deposito - $transaction->total_price - $transaction->shipping_price)}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Print Template -->
        <div id=" js-print-template" x-ref="printTemplate" class="hidden">
            <section class="py-1 bg-black">
                <div class="max-w-5xl mx-auto py-5 bg-white">
                    <article class="overflow-hidden">
                        <div class="bg-[white] rounded-b-md">
                            <div class="p-9">
                                <div class="space-y-6 text-slate-700">
                                    <svg width="50 " height="50" viewBox="0 0 131 151" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M129.08 113.525C128.268 114.704 127.442 115.069 127.442 115.069C127.442 115.069 77.2226 144.816 69.6397 149.242C69.1497 149.533 68.8873 149.689 68.8873 149.689C68.8873 149.689 67.7706 150.424 65.916 150.391C64.0612 150.447 62.9352 149.726 62.9352 149.726C62.9352 149.726 62.6688 149.572 62.1713 149.284C54.5146 144.939 3.96287 115.821 3.96287 115.821C3.96287 115.821 3.13235 115.466 2.30676 114.298C0.729672 112.843 0.677402 110.946 0.677402 110.946C0.677402 110.946 0.656168 106.88 0.623008 100.704C0.524741 86.075 0.353652 55.5653 0.300121 45.9411C0.291028 44.7344 0.282632 43.7045 0.275132 42.8844C0.261531 42.7333 0.238935 42.3807 0.265414 41.8957C0.259458 41.3413 0.254268 40.9654 0.249925 40.7911C0.17311 37.6856 3.99178 35.3291 3.99178 35.3291L61.4912 1.25988C62.7164 0.596637 63.9331 0.387224 65.0005 0.397001C66.0682 0.373924 67.288 0.568338 68.5219 1.21701L126.432 34.583C126.432 34.583 130.279 36.8928 130.24 39.9989C130.238 40.1733 130.238 40.5492 130.238 41.1036C130.271 41.5884 130.252 41.9415 130.241 42.0926C130.243 42.9118 130.247 43.9399 130.253 45.1446C130.317 54.7633 130.517 85.2798 130.597 99.9119C130.64 106.088 130.668 110.154 130.668 110.154C130.668 110.154 130.639 112.051 129.08 113.525ZM107.182 40.2807C95.325 33.4783 67.3916 17.3443 67.3916 17.3443C67.3916 17.3443 66.4462 16.8352 65.1008 16.7236C63.757 16.8516 62.818 17.3722 62.818 17.3722C62.818 17.3722 35.0832 33.8454 23.3101 40.7917L62.6204 64.5349C62.6204 64.5349 64.5126 65.7827 65.4168 68.5653C66.287 65.7719 68.1639 64.5011 68.1639 64.5011L107.182 40.2807ZM65.9597 83.5267L115.879 52.5276C115.898 55.2915 115.926 59.6539 115.958 64.6478L116.098 86.76C116.139 93.6112 116.169 99.0651 116.169 100.47C116.17 105.342 113.665 106.444 113.665 106.444C113.665 106.444 70.4842 131.941 67.6766 133.539C66.9976 133.838 66.3727 133.992 65.816 134.056C65.2585 133.999 64.6317 133.852 63.949 133.562C61.1221 131.998 17.6336 107.029 17.6336 107.029C17.6336 107.029 15.1154 105.957 15.0568 101.086C15.0401 99.6813 15.0038 94.2274 14.9616 87.3762L14.8314 65.264C14.8025 60.2701 14.7779 55.9076 14.7626 53.1437L65.0562 83.5322L65.0596 84.0857L65.5097 83.8062L65.9631 84.0802L65.9597 83.5267Z"
                                            fill="#14CCD8" />
                                    </svg>

                                    <p class="text-xl font-extrabold tracking-tight uppercase font-body">
                                        Wedding Elektronik Salesman Program
                                    </p>
                                    <p class="text-xl font-extrabold tracking-tight uppercase font-body">
                                        INVOICE
                                    </p>
                                </div>
                            </div>
                            <div class="p-10">
                                <div class="flex w-full">
                                    <div class="grid grid-cols-4 gap-12">
                                        <div class="text-sm font-light text-slate-500">
                                            <p class="text-sm font-normal text-slate-700">
                                                Invoice Detail:
                                            </p>
                                            <p>Pesanan Untuk Acara</p>
                                            <p class="text-sm font-semibold text-slate-700">
                                                {{$transaction->user->name}}</p>
                                            <p>Alamat User</p>
                                            <p class="text-sm font-semibold text-slate-700">
                                                {{$transaction->user->address}}</p>
                                            <p>Username </p>
                                            <p class="text-sm font-semibold text-slate-700">
                                                {{$transaction->user->username}}</p>
                                        </div>
                                        <div class="text-sm font-light text-slate-500">
                                            <p class="text-sm font-normal text-slate-700">Billed To Acara</p>
                                            <p>Nama Acara</p>
                                            <p class="text-sm font-semibold text-slate-700">
                                                {{$transaction->name_acara}} </p>
                                            <p>Alamat Acara</p>
                                            <p class="text-sm font-semibold text-slate-700"> {{$transaction->address}}
                                            </p>
                                            <p>No Telephon</p>
                                            <p class="text-sm font-semibold text-slate-700">
                                                {{$transaction->user->phone}}</p>
                                        </div>
                                        <div class="text-sm font-light text-slate-500">
                                            <p class="text-sm font-normal text-slate-700">Tanggal Pemesanan</p>

                                            <p class="text-sm font-semibold text-slate-700">
                                                {{$transaction->created_at}}</p>

                                            <p class="mt-2 text-sm font-normal text-slate-700">
                                                Tanggal Acara
                                            </p>
                                            <p class="text-sm font-semibold text-slate-700"> {{$transaction->tgl_acara}}
                                            </p>
                                        </div>
                                        <div class="text-sm font-light text-slate-500">
                                            <p class="text-sm font-normal text-slate-700">STATUS</p>
                                            <p class="text-sm font-semibold text-slate-700"> {{$transaction->status}}
                                            </p>

                                            <p class="mt-2 text-sm font-normal text-slate-700">Payment</p>
                                            <p>{{$transaction->payment}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-12">
                                <div class="flex flex-col mx-0 mt-0">
                                    <table class="min-w-full divide-y divide-slate-500">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-normal text-slate-700 sm:pl-6 md:pl-0">
                                                    Description Produk
                                                </th>
                                                <th scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-normal text-slate-700 sm:pl-6 md:pl-0">
                                                    Vendor
                                                </th>
                                                <th scope="col"
                                                    class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
                                                    Quantity
                                                </th>
                                                <th scope="col"
                                                    class="hidden py-3.5 px-3 text-right text-sm font-normal text-slate-700 sm:table-cell">
                                                    Harga
                                                </th>
                                                <th scope="col"
                                                    class="py-3.5 pl-3 pr-4 text-right text-sm font-normal text-slate-700 sm:pr-6 md:pr-0">
                                                    Total
                                                </th>
                                            </tr>
                                        </thead>
                                        @foreach ($transactions as $item)
                                        <tbody>
                                            <tr class="border-b border-slate-200">
                                                <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                                                    <div class="font-medium text-slate-700">{{$item->product->name}}
                                                    </div>

                                                </td>
                                                <td class="py-4 pl-4 pr-3 text-sm sm:pl-6 md:pl-0">
                                                    <div class="font-medium text-slate-700">{{$item->vendor->name}}
                                                    </div>

                                                </td>

                                                <td
                                                    class="hidden px-3 py-4 text-sm text-right text-slate-500 sm:table-cell">
                                                    {{$item->quantity}}
                                                </td>
                                                <td
                                                    class="hidden px-3 py-4 text-sm text-right font-bold text-slate-500 sm:table-cell">
                                                    Rp.{{number_format($item->product->price)}}
                                                </td>
                                                <td
                                                    class="py-4 pl-3 pr-4 text-sm text-right font-bold text-slate-500 sm:pr-6 md:pr-0">
                                                    Rp.{{number_format($item->product->price * $item->quantity)}}
                                                </td>

                                            </tr>
                                            <!-- Here you can write more products/tasks that you want to charge for-->
                                        </tbody>
                                        @endforeach
                                        <tfoot class="">
                                            <tr>
                                                <th scope="row" colspan="4"
                                                    class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
                                                    Subtotal
                                                </th>
                                                <th scope="row"
                                                    class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
                                                    Subtotal
                                                </th>
                                                <td
                                                    class="pt-6 pl-3 pr-4 text-sm font-bold text-right text-slate-500 sm:pr-6 md:pr-0">
                                                    Rp.{{number_format($transaction->total_price)}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4"
                                                    class="hidden pt-6 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
                                                    Deposito
                                                </th>
                                                <th scope="row"
                                                    class="pt-6 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
                                                    Deposito
                                                </th>
                                                <td
                                                    class="pt-6 pl-3 pr-4 text-sm font-bold text-right text-slate-500 sm:pr-6 md:pr-0">
                                                    Rp.{{number_format($transaction->deposito)}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4"
                                                    class="hidden pt-4 pl-6 pr-3 text-sm font-light text-right text-slate-500 sm:table-cell md:pl-0">
                                                    Biaya Layanan
                                                </th>
                                                <th scope="row"
                                                    class="pt-4 pl-4 pr-3 text-sm font-light text-left text-slate-500 sm:hidden">
                                                    Biaya Layanan
                                                </th>
                                                <td
                                                    class="pt-4 pl-3 pr-4 text-sm font-bold text-right text-slate-500 sm:pr-6 md:pr-0">
                                                    Rp.{{number_format($transaction->shipping_price)}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4"
                                                    class="hidden pt-4 pl-6 pr-3 text-sm font-normal text-right text-slate-700 sm:table-cell md:pl-0">
                                                    Sisa Pembayaran
                                                </th>
                                                <th scope="row"
                                                    class="pt-4 pl-4 pr-3 text-sm font-normal text-left text-slate-700 sm:hidden">
                                                    Sisa Pembayaran
                                                </th>
                                                <td class="pt-4 pl-3 pr-4 text-sm  font-bold text-right text-slate-700
                                        sm:pr-6 md:pr-0">
                                                    Rp.{{number_format($transaction->total_price - $transaction->deposito)}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="1"
                                                    class="hidden pt-4 pl-6 pr-3 text-sm font-normal text-center text-slate-700 sm:table-cell md:pl-0">
                                                    M.Reyhan Dwi Amberta
                                                </th>
                                                <th scope="row"
                                                    class="pt-4 pl-4 pr-3 text-sm font-normal text-center text-slate-700 sm:hidden">
                                                    M.Reyhan Dwi Amberta
                                                </th>

                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="1"
                                                    class="hidden pt-4 pl-6 pr-3 text-sm font-normal text-center text-slate-700 sm:table-cell md:pl-0">
                                                    Founder WESP
                                                </th>
                                                <th scope="row"
                                                    class="pt-4 pl-4 pr-3 text-sm font-normal text-center text-slate-700 sm:hidden">
                                                    Founder WESP
                                                </th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>


                    </article>
                </div>
            </section>
        </div>

        <!-- /Print Template -->


    </div>

    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function () {
            const today = new Date();

            var picker = new Pikaday({
                keyboardInput: false,
                field: document.querySelector('.js-datepicker'),
                format: 'MMM D YYYY',
                theme: 'date-input',
                i18n: {
                    previousMonth: "Prev",
                    nextMonth: "Next",
                    months: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec"
                    ],
                    weekdays: [
                        "Sunday",
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
                }
            });
            picker.setDate(new Date());

            var picker2 = new Pikaday({
                keyboardInput: false,
                field: document.querySelector('.js-datepicker-2'),
                format: 'MMM D YYYY',
                theme: 'date-input',
                i18n: {
                    previousMonth: "Prev",
                    nextMonth: "Next",
                    months: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec"
                    ],
                    weekdays: [
                        "Sunday",
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
                }
            });
            picker2.setDate(new Date());
        });

        function invoices() {
            return {
                items: [],
                invoiceNumber: 0,
                invoiceDate: '',
                invoiceDueDate: '',

                totalGST: 0,
                netTotal: 0,

                item: {
                    id: '',
                    name: '',
                    qty: 0,
                    rate: 0,
                    total: 0,
                    gst: 18
                },

                billing: {
                    name: '',
                    address: '',
                    extra: ''
                },
                from: {
                    name: '',
                    address: '',
                    extra: ''
                },

                showTooltip: false,
                showTooltip2: false,
                openModal: false,

                addItem() {
                    this.items.push({
                        id: this.generateUUID(),
                        name: this.item.name,
                        qty: this.item.qty,
                        rate: this.item.rate,
                        gst: this.calculateGST(this.item.gst, this.item.rate),
                        total: this.item.qty * this.item.rate
                    })

                    this.itemTotal();
                    this.itemTotalGST();

                    this.item.id = '';
                    this.item.name = '';
                    this.item.qty = 0;
                    this.item.rate = 0;
                    this.item.gst = 18;
                    this.item.total = 0;
                },

                deleteItem(uuid) {
                    this.items = this.items.filter(item => uuid !== item.id);

                    this.itemTotal();
                    this.itemTotalGST();
                },

                itemTotal() {
                    this.netTotal = this.numberFormat(this.items.length > 0 ? this.items.reduce((result,
                        item) => {
                        return result + item.total;
                    }, 0) : 0);
                },

                itemTotalGST() {
                    this.totalGST = this.numberFormat(this.items.length > 0 ? this.items.reduce((result,
                        item) => {
                        return result + (item.gst * item.qty);
                    }, 0) : 0);
                },

                calculateGST(GSTPercentage, itemRate) {
                    return this.numberFormat((itemRate - (itemRate * (100 / (100 + GSTPercentage))))
                        .toFixed(2));
                },

                generateUUID() {
                    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
                        var r = Math.random() * 16 | 0,
                            v = c == 'x' ? r : (r & 0x3 | 0x8);
                        return v.toString(16);
                    });
                },

                generateInvoiceNumber(minimum, maximum) {
                    const randomNumber = Math.floor(Math.random() * (maximum - minimum)) + minimum;
                    this.invoiceNumber = '#INV-' + randomNumber;
                },

                numberFormat(amount) {
                    return amount.toLocaleString("en-US", {
                        style: "currency",
                        currency: "INR"
                    });
                },

                printInvoice() {
                    var printContents = this.$refs.printTemplate.innerHTML;
                    var originalContents = document.body.innerHTML;

                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }
            }
        }

    </script>



    <div class="">
        <div
            class="flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">

            <h2 class="pt-2 font-semibold text-lg text-gray-800 leading-tight mb-5">Item dan Vendor</h2>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Vendor</th>
                                <th>Qty</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        // AJAX DataTable
        var datatable = $('#crudTable1').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    width: '5%'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'product.price',
                    name: 'product.price'
                },
                {
                    data: 'vendor.name',
                    name: 'vendor.name'
                },
                {
                    data: 'quantity',
                    name: 'quantity'
                },
            ],
        });

    </script>
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable2').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    width: '5%'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'product.price',
                    name: 'product.price'
                },
                {
                    data: 'vendor.name',
                    name: 'vendor.name'
                },
                {
                    data: 'quantity',
                    name: 'quantity'
                },
            ],
        });

    </script>
    @endsection
