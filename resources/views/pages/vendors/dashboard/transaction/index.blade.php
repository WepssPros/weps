@extends('layouts.vendor')

@section('Dashboard.vendor-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard-Vendor-Transaksi Anda ') }} {{Auth::user()->name}}

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
                <table id="crudTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nama Acara</th>
                            <th>Alamat</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Tanggal Acara</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- Template Analisis nanti  --}}

{{-- table 1  --}}
<script>
    // AJAX DataTable
    var datatable = $('#crudTable').DataTable({
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
                data: 'total_price',
                name: 'total_price'
            },
            {
                data: 'transaction.status',
                name: 'transaction.status'
            },
            {
                data: 'transaction.tgl_acara',
                name: 'transaction.tgl_acara'
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

</script>
{{-- table 2  --}}

@endsection
