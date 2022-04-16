@extends('layouts.vendor') @section('Dashboard.vendor-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __("Detail Produk") }} {{$product->name}}
    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0"></div>
</div>
<!-- Main content header -->

<!-- Start Content -->

<div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-1">
    <div class="mb-2 pt-2">
        <a href="{{ route('dashboard.vendors.product.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg">
            < Kembali ke Produk </a> </div> <main class="my-8">
                <div class="container mx-auto px-6">
                    <div class="md:flex md:items-center">
                        <div class="w-full h-64 md:w-1/2 lg:h-96">
                            <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto"
                                src="{{ $product->galleries()->exists() ? ($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                                alt="Nike Air" />
                        </div>
                        <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                            <h3 class="text-gray-700 uppercase text-lg">Nama Produk</h3>
                            <span class="text-gray-500 mt-3">{{$product->name}}</span>
                            <hr class="my-3" />
                            <h3 class="text-gray-700 uppercase text-lg">
                                Harga Produk
                            </h3>
                            <span class="text-gray-500 mt-3">Rp.{{number_format($product->price)}}</span>
                            <hr class="my-3" />
                            <h3 class="text-gray-700 uppercase text-lg">
                                Kategori Produk
                            </h3>
                            <span class="text-gray-500 mt-3">{{$product->category->name}}</span>
                            <hr class="my-3" />
                            <h3 class="text-gray-700 uppercase text-lg">
                                Vendor Produk
                            </h3>
                            <span class="text-gray-500 mt-3">{{$product->vendor->name}}</span>
                            <hr class="my-3" />
                            <h3 class="text-gray-700 uppercase text-lg">Tags</h3>
                            <span class="text-gray-500 mt-3">{{$product->tags}}</span>
                            <hr class="my-3" />
                            <h3 class="text-gray-700 uppercase text-lg">
                                Deskripsi Produk
                            </h3>
                            <span class="text-gray-500 mt-3">{{$product->description}}</span>
                            <hr class="my-3" />
                        </div>
                    </div>
                    <div class="mt-16">
                        <h3 class="text-gray-600 text-2xl font-medium">Foto - Foto</h3>
                        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                            @foreach ($product->galleries as $item)

                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <div class="flex items-end justify-end h-56 w-full bg-cover"
                                    style="background-image: url({{url($item->url) }})">

                                </div>
                                <div class="px-5 py-3">
                                    <h3 class="text-gray-700 uppercase">{{$item->product->name}}</h3>
                                    <span class="text-gray-500 mt-2">{{$item->product->category->name}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                </main>

                {{-- Template Analisis nanti  --}}

                {{-- table 1  --}}

                {{-- table 2  --}}

                @endsection
    </div>
