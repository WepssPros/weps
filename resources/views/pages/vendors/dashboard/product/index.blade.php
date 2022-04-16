@extends('layouts.vendor')
@section('Dashboard.vendor-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __("Produk Saya") }}
    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0"></div>
</div>
<!-- Main content header -->

<!-- Start Content -->

<div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-1">
    <div class="mb-10 pt-2">
        <a href="{{ route('dashboard.vendors.product.create') }}"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
            + Create Produk
        </a>

    </div>

    @foreach ($products as $product)
    <div class="p-2">
        <div
            class="inline-flex items-center bg-white leading-none text-blue-700 rounded-full p-2 shadow text-teal  text-md">
            <span
                class="inline-flex bg-blue-700 text-white rounded-full h-6 px-2 justify-center items-center font-bold ">{{ __('Product') }}</span>
            <span class="inline-flex px-3"> {{$product->vendor->name}}
            </span>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="bg-white shadow-md rounded-3xl p-10">
            <div class="flex-none lg:flex">
                <div class="h-full w-full lg:h-48 lg:w-48 lg:mb-0 mb-3">
                    <img src="{{ $product->galleries()->exists() ? url($product->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                        alt="Just a flower" class="w-full object-scale-down lg:object-cover lg:h-48 rounded-2xl" />
                </div>
                <div class="flex-auto ml-3 justify-evenly py-2">
                    <div class="flex flex-wrap">
                        <div class="w-full flex-none text-xs text-blue-700 font-medium">
                            Nama Produk
                        </div>
                        <h2 class="flex-auto text-lg font-medium">
                            {{$product->name}}
                        </h2>
                    </div>
                    <p class="mt-3"></p>
                    <div class="flex py-4 text-sm text-gray-500">
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="">{{$product->vendor->name}}</p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-5 w-5 mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                version="1.1" width="25" height="25" x="0" y="0" viewBox="0 0 24 24"
                                style="enable-background: new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m24 11.5a4.476 4.476 0 0 0 -1.706-3.5 4.481 4.481 0 0 0 -2.794-8h-15a4.481 4.481 0 0 0 -2.794 8 4.443 4.443 0 0 0 0 7 4.481 4.481 0 0 0 2.794 8h15a4.481 4.481 0 0 0 2.794-8 4.476 4.476 0 0 0 1.706-3.5zm-22-7a2.5 2.5 0 0 1 2.5-2.5h.5v1a1 1 0 0 0 2 0v-1h2v1a1 1 0 0 0 2 0v-1h8.5a2.5 2.5 0 0 1 0 5h-15a2.5 2.5 0 0 1 -2.5-2.5zm20 14a2.5 2.5 0 0 1 -2.5 2.5h-15a2.5 2.5 0 0 1 0-5h.5v1a1 1 0 0 0 2 0v-1h2v1a1 1 0 0 0 2 0v-1h8.5a2.5 2.5 0 0 1 2.5 2.5zm-17.5-4.5a2.5 2.5 0 0 1 0-5h.5v1a1 1 0 0 0 2 0v-1h2v1a1 1 0 0 0 2 0v-1h8.5a2.5 2.5 0 0 1 0 5z"
                                        fill="#614aab" data-original="#000000" />
                                </g>
                            </svg>
                            <p class="">{{$product->category->name}}</p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-5 w-5 mr-3 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                version="1.1" width="25" height="25" x="0" y="0" viewBox="0 0 24 24"
                                style="enable-background: new 0 0 512 512" xml:space="preserve">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m19 20h-14a5.006 5.006 0 0 1 -5-5v-6a5.006 5.006 0 0 1 5-5h14a5.006 5.006 0 0 1 5 5v6a5.006 5.006 0 0 1 -5 5zm-14-14a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-6a3 3 0 0 0 -3-3zm7 10a4 4 0 1 1 4-4 4 4 0 0 1 -4 4zm0-6a2 2 0 1 0 2 2 2 2 0 0 0 -2-2zm-7-2a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm13 1a1 1 0 1 0 1-1 1 1 0 0 0 -1 1zm-13 5a1 1 0 1 0 1 1 1 1 0 0 0 -1-1zm13 1a1 1 0 1 0 1-1 1 1 0 0 0 -1 1z"
                                        fill="#18a55e" data-original="#000000" />
                                </g>
                            </svg>
                            <p class="">
                                Rp.{{number_format($product->price)}}
                            </p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="">{{$product->created_at}}</p>
                        </div>
                    </div>
                    <div class="flex p-4 pb-2 border-t border-gray-200"></div>
                    <div class="flex space-x-3 text-sm font-medium"
                        x-data="{ showModal1: false, showModal2: false, showModal3: false }">
                        <div class=" flex-auto flex space-x-3"></div>
                        <a href="{{route('dashboard.vendors.product.gallery.index', $product->id)}}"
                            class="mb-2 md:mb-0 bg-blue-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Gallery Produk
                        </a>
                        <a href="{{route('dashboard.vendors.product.show', $product->id)}} "
                            class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Detail Produk
                        </a>
                        <a href="{{route('dashboard.vendors.product.edit', $product->id)}} "
                            class="mb-2 md:mb-0 bg-green-500 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Edit Produk
                        </a>


                        <button :class="{'overflow-y-hidden': showModal1 }" class="mb-2 md:mb-0 bg-red-500 px-5 py-2 shadow-sm tracking-wider text-white rounded-full
                           hover:bg-gray-800" @click="showModal1 = true">

                            <p>
                                Hapus Produk
                            </p>
                        </button>
                        {{-- MODAL DELETE  --}}
                        <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                            x-show="showModal1" x-transition:enter="transition duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition duration-300" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0">
                            <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">

                                <div class=" text-gray-900 z-20  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white"
                                    @click.away="showModal1 = false" x-show="showModal1"
                                    x-transition:enter="transition transform duration-300"
                                    x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                                    x-transition:leave="transition transform duration-300"
                                    x-transition:leave-start="scale-100" x-transition:leave-end="scale-0">

                                    <div
                                        class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                                        <!--content-->
                                        <div class="">
                                            <!--body-->
                                            <div class="text-center p-5 flex-auto justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-16 h-16 flex items-center text-red-500 mx-auto"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <h2 class="text-xl font-bold py-4 ">Apa Kamu Yakin ?</h3>
                                                    <p class="text-sm text-gray-500 px-8">Apakah kamu benar-benar ingin
                                                        Hapus Produk ? <p class="font-bold">"{{$product->name}}"</p>
                                                        Proses ini tidak dapat dibatalkan</p>
                                            </div>
                                            <!--footer-->


                                            <div class="p-3  mt-2 text-center space-x-4 md:block">
                                                <form @click=" showModal1=false"
                                                    class="mb-2 md:mb-0 bg-gray-100 px-5 py-2 shadow-sm tracking-wider text-gray-800 rounded-full hover:text-white hover:bg-gray-800">
                                                    <button @click="showModal1 = false">
                                                        Cancel
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="p-3  mt-2 text-center space-x-4 md:block">
                                                <form
                                                    action="{{ route('dashboard.vendors.product.destroy', $product->id) }}"
                                                    method="post" enctype="multipart/form-data"
                                                    class="mb-2 md:mb-0 bg-red-500 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-red-800">
                                                    @csrf @method('delete')
                                                    <button aria-label="like">Hapus Produk</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- MODAL DELETE  --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $products->links() }}

    <div class="flex flex-col mt-6">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-blue-200 rounded-md shadow-md">
                    <table id="crudTable" class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                        <thead class="bg-gray-50 px-6">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    Harga
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    Deskripsi
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    Tags
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    Kategori
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    vendor
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-md font-bold tracking-wider text-left text-gray-600 uppercase">
                                    Aksi
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Action</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>
{{-- Template Analisis nanti  --}}

{{-- table 1  --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'price',
                    name: 'price'
                },
                {
                    data: 'description',
                    name: 'users.username'
                },
                {
                    data: 'tags',
                    name: 'tags'
                },
                {
                    data: 'category.name',
                    name: 'category.name'
                },
                {
                    data: 'vendor.name',
                    name: 'vendor.name'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ],
        });

        // Create the chart with initial data
        var container = $('<div/>').insertBefore(table.table().container());

        var chart = Highcharts.chart(container[0], {
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            title: {
                text: 'Staff Count Per Position',
            },
            series: [{
                data: chartData(table),
            }, ],
        });

        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartData(table));
        });
    });

</script>
{{-- table 2  --}}

@endsection
