@extends('layouts.admin')

@section('Dashboard-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard-Admin-Transaksi') }}

    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0">
    </div>
</div>
<!-- Main content header -->


<!-- Start Content -->

<div class="py-1">
    <div class="flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <table id="crudTable" class="cell-border">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Total Harga</th>
                            <th>Tanggal Acara</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot class="cell-border">
                        <tr>
                            <th colspan="1">Total Pendapatan </th>
                            <th colspan="7" id="total"></th>

                        </tr>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- Template Analisis nanti  --}}


{{-- table 2  --}}
<script>
    $(document).ready(function () {
        // Create DataTable
        var table = $('#crudTable').DataTable({
            "drawCallback": function () {
                //alert("TESTING");
                //AMBIL TOTAL PRICE
                var api = this.api();
                $(api.column(3).footer()).html(
                    'Total : ' + api.column(3, {
                        page: 'current'
                    }).data().sum()
                )
            },
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
                    data: 'total_price',
                    name: 'total_price'
                },
                {
                    data: 'tgl_acara',
                    name: 'tgl_acara'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },

                {
                    data: 'status',
                    name: 'status'
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
                type: 'column',

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
            subtitle: {
                text: 'Status Pemesanan di dapat dari "Searchable"'

            },
            yAxis: [{
                title: {
                    text: 'Total Pemesanan'
                },
                showFirstLabel: true
            }],
            title: {
                text: 'Status Pemesanan Produk',
            },

            series: [{
                    name: 'Status Pemesanan',
                    data: chartdata(table),
                },
                {
                    name: 'Pesanan',
                    data: chartdatanama(table),
                },
                {
                    name: 'Tanggal Pemesanan',
                    data: chartdatas(table),
                },

            ],
        });


        // On each draw, update the data in the chart
        table.on('draw', function () {
            chart.series[0].setData(chartdata(table));
            chart.series[1].setData(chartdatanama(table));
            chart.series[2].setData(chartdatas(table));

        });


    });

    function chartdata(table) {
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

    function chartdatanama(table) {
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

    function chartdatas(table) {
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
@endsection
