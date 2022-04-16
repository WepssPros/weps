@extends('layouts.vendor')

@section('Dashboard.vendor-Content')

<!-- Main content -->

<!-- Main content header -->

<div class="p-2  ">
    <div
        class="inline-flex items-center bg-white leading-none text-blue-700 rounded-full p-2 shadow text-teal  text-md">
        <span
            class="inline-flex bg-blue-700 text-white rounded-full h-6 px-3 justify-center items-center font-bold">{{ __('Dashboard-Vendor') }}</span>
        <span class="inline-flex px-2">Selamat Datang Di Dashboard Anda Silahkan Atur Produk / Jasa yang kamu tawarkan
        </span>
    </div>
</div>

<!-- Main content header -->


<!-- Start Content -->
<div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg bg-white">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">{{$users}} Active</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg bg-white">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Total Pesanan Masuk</span>
                <span class="text-lg font-semibold">{{$pesanans}}</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg bg-white">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Estimasi Total Pendapatan</span>
                <span class="text-lg font-semibold">Rp.{{number_format($revenue)}}</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded ">14%</span>
            <span>from 2019</span>
        </div>
    </div>

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg bg-white">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Produk Kamu</span>
                <span class="text-lg font-semibold">{{$products}}</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>


</div>


{{-- Table Analisis  --}}
<div class="p-2">
    <div
        class="inline-flex items-center bg-white leading-none text-green-700 rounded-full p-2 shadow text-teal text-md mt-2">
        <span class="inline-flex bg-blue-700 text-white rounded-full h-6 px-2 justify-center items-center font-bold">
            {{ __('Analisa Pemesanan') }}</span>
        <span class="inline-flex px-3">Lihat Analisa yang telah kita buatkan untuk anda agar anda dapat memprediksi dan
            memenejemen produk anda dengan baik !!
        </span>
    </div>
</div>

{{-- Template Analisis nanti  --}}
<div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-3 ">
    <div
        class="p-1 items-center justify-center  bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <table id="crudTable"
            class="hidden px-2 items-center justify-center  bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nama Acara</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    {{-- table  --}}
    <div
        class="p-1 items-center justify-center  bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <table id="crudTable1"
            class="hidden px-2 items-center justify-center  bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nama Acara</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div
        class="p-1 items-center justify-center  bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <table id="crudTable2"
            class="hidden px-2 items-center justify-center  bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nama Acara</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
{{-- tutup Table Analisis  --}}



{{-- Table untuk Transaksi  --}}
<div class="p-2 mt-2">
    <div
        class="inline-flex items-center bg-white leading-none text-blue-700 rounded-full p-2 shadow text-teal  text-md">
        <span
            class="inline-flex bg-blue-700 text-white rounded-full h-6 px-2 justify-center items-center font-bold ">{{ __('Transaksi Anda') }}</span>
        <span class="inline-flex px-3"> Lihat Transaksi Anda
        </span>
    </div>
</div>

<div class="flex flex-col mt-4 mb-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                    <thead class="bg-white divide-y divide-gray-200">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Name & Username
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Nama Acara & Alamat Acara
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Status
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Tanggal Pesanan Dibuat
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Tanggal Acara
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Role
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($transactions as $transaction)

                        <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="h-10 w-10 rounded-full object-cover"
                                            src="{{ $transaction->user->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" />

                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">{{$transaction->user->name}}
                                        </div>
                                        <div class="text-sm text-gray-500">{{$transaction->user->email}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$transaction->transaction->name_acara}}</div>
                                <div class="text-sm text-gray-500">{{$transaction->transaction->address}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-200 rounded-full">
                                    {{$transaction->transaction->status}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-800 bg-green-200 rounded-full">
                                    {{$transaction->created_at}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-gray-500 bg-green-200 rounded-full">
                                    {{$transaction->transaction->tgl_acara}}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">{{$transaction->user->roles}}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                <a class="bg-green-300 rounded-full p-2 px-6 text-gray-500 hover:bg-green-500 hover:text-white"
                                    href="{{route('dashboard.vendors.transaction.show', $transaction->transaction->id)}}">Show</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>


                {{ $transactions->links() }}
            </div>
        </div>
    </div>
</div>
{{-- tutup Table untuk transaksi  --}}


{{-- table 1  --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'transaction.id',
                    name: 'transaction.id'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
                },
                {
                    data: 'transaction.name_acara',
                    name: 'transaction.name_acara'
                },
                {
                    data: 'user.address',
                    name: 'user.address'
                },
                {
                    data: 'transaction.total_price',
                    name: 'transaction.total_price'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
                },
                {
                    data: 'transaction.created_at',
                    name: 'transaction.created_at'
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
                    },
                    showInLegend: true,
                },

            },
            title: {
                text: 'Status Pemesanan',
            },
            series: [{
                data: chartDatas(table),

            }, ],
        });


        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartDatas(table));
        });


    });

    function chartDatas(table) {
        var counts = {};

        // Count the number of entries for each position
        table
            .column(5, {
                search: 'applied'
            })
            .data()
            .each(function (val) {
                if (counts[val]) {
                    counts[val] += 1;
                } else {
                    counts[val] = 1;
                }
            });

        // And map it to the format highcharts uses
        return $.map(counts, function (val, key) {
            return {
                name: key,
                y: val,
            };
        });
    }

</script>
{{-- table 2  --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable1').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'transaction.id',
                    name: 'transaction.id'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'transaction.name_acara',
                    name: 'transaction.name_acara'
                },
                {
                    data: 'user.address',
                    name: 'user.address'
                },
                {
                    data: 'transaction.total_price',
                    name: 'transaction.total_price'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
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
                    },
                    showInLegend: true,
                },

            },
            title: {
                text: 'Produk Jasa Terfavorit',
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

    function chartData(table) {
        var counts = {};

        // Count the number of entries for each position
        table
            .column(1, {
                search: 'applied'
            })
            .data()
            .each(function (val) {
                if (counts[val]) {
                    counts[val] += 1;
                } else {
                    counts[val] = 1;
                }
            });

        // And map it to the format highcharts uses
        return $.map(counts, function (val, key) {
            return {
                name: key,
                y: val,
            };
        });
    }

</script>
{{-- table3  --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable2').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'transaction.id',
                    name: 'transaction.id'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
                },
                {
                    data: 'transaction.name_acara',
                    name: 'transaction.name_acara'
                },
                {
                    data: 'user.address',
                    name: 'user.address'
                },
                {
                    data: 'transaction.total_price',
                    name: 'transaction.total_price'
                },
                {
                    data: 'transaction.status',
                    name: 'transaction.status'
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
                    },
                    showInLegend: true,
                },

            },
            title: {
                text: 'User / Pelanggan Favorit',
            },
            series: [{
                data: chartDatax(table),

            }, ],
        });


        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartDatax(table));
        });


    });

    function chartDatax(table) {
        var counts = {};

        // Count the number of entries for each position
        table
            .column(1, {
                search: 'applied'
            })
            .data()
            .each(function (val) {
                if (counts[val]) {
                    counts[val] += 1;
                } else {
                    counts[val] = 1;
                }
            });

        // And map it to the format highcharts uses
        return $.map(counts, function (val, key) {
            return {
                name: key,
                y: val,
            };
        });
    }

</script>


@endsection
