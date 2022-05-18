@extends('layouts.admin')

@section('Dashboard-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard-Admin') }}

    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0">
    </div>
</div>

<!-- Main content header -->


<!-- Start Content -->
<div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">100,221</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">100,221</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">100,221</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>

    <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start justify-between">
            <div class="flex flex-col space-y-2">
                <span class="text-gray-400">Total Users</span>
                <span class="text-lg font-semibold">100,221</span>
            </div>
            <div class="p-10 bg-gray-200 rounded-md"></div>
        </div>
        <div>
            <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
            <span>from 2019</span>
        </div>
    </div>

</div>


{{-- Template Analisis nanti  --}}
<div id="pre-container " class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-3     ">
    <div
        class="p-4 transition-shadow border  hover:shadow-lg items-center justify-center  bg-white rounded-md shadow-md">
        <table id="crudTable" class="hidden">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Total Harga</th>
                    <th>Vendor</th>
                    <th>Produk</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div
        class="p-4 transition-shadow border  hover:shadow-lg items-center justify-center  bg-white rounded-md shadow-md">
        <table id="crudTable1" class="hidden">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Vendor</th>
                    <th>Produk</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div
        class="p-4 transition-shadow border  hover:shadow-lg items-center justify-center  bg-white rounded-md shadow-md">
        <table id="crudTable2" class="hidden">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Vendor</th>
                    <th>Produk</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

{{-- table 1  --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    width: '5%'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
                },
                {
                    data: 'user.address',
                    name: 'user.address'
                },
                {
                    data: 'vendor.name',
                    name: 'vendor.name'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'total_price',
                    name: 'total_price'
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
                    width: '10%'
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
            .column(6, {
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
                    data: 'id',
                    name: 'id',
                    width: '5%'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
                },
                {
                    data: 'user.address',
                    name: 'user.address'
                },
                {
                    data: 'vendor.name',
                    name: 'vendor.name'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'total_price',
                    name: 'total_price'
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
                    width: '10%'
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
                text: 'Status Pemesanan Vendor',
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
            .column(3, {
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
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable2').DataTable({
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    width: '5%'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
                },
                {
                    data: 'user.address',
                    name: 'user.address'
                },
                {
                    data: 'vendor.name',
                    name: 'vendor.name'
                },
                {
                    data: 'product.name',
                    name: 'product.name'
                },
                {
                    data: 'total_price',
                    name: 'total_price'
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
                    width: '10%'
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
                text: 'Status Pemesanan Produk',
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
            .column(4, {
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
