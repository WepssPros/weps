@extends('layouts.admin')

@section('Dashboard-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard-Admin-Produk') }}

    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0">
    </div>
</div>
<!-- Main content header -->


<!-- Start Content -->


<div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-1 ">
    <div class="mb-10 pt-2">
        <a href="{{ route('dashboard.product.create') }}"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
            + Create Produk
        </a>
    </div>
    <div
        class="p-4 transition-shadow border  hover:shadow-lg items-center justify-center  bg-white rounded-md shadow-md">
        <table id="crudTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Description</th>
                    <th>Tags</th>
                    <th>Kategori</th>
                    <th>Vendor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
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
                    data: 'id',
                    name: 'id',
                    width: '5%'
                },
                {
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
