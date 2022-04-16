@extends('layouts.admin')

@section('Dashboard-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard-Admin-Calon Vendor WESP') }}

    </h2>
    <div class="space-y-6 md:space-x-2 md:space-y-0">
    </div>
</div>
<!-- Main content header -->


<!-- Start Content -->

<div class="py-2">
    <div class="flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-2 bg-white sm:p-6">
                <table id="crudTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama User</th>
                            <th>Nama Vendor</th>
                            <th>Provinsi Vendor</th>
                            <th>Kota Vendor</th>
                            <th>Alamat Vendor</th>
                            <th>Lama Vendor Berdiri</th>
                            <th>Total Acara Vendor</th>
                            <th>Kategori Vendor</th>
                            <th>Status</th>
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
                data: 'id',
                name: 'id',

            },
            {
                data: 'user.name',
                name: 'user.name'
            },
            {
                data: 'name_vendor',
                name: 'name_vendor'
            },
            {
                data: 'provinsi_vendor',
                name: 'provinsi_vendor'
            },
            {
                data: 'kota_vendor',
                name: 'kota_vendor'
            },
            {
                data: 'alamat_vendor',
                name: 'alamat_vendor'
            },
            {
                data: 'umur_vendor',
                name: 'umur_vendor'
            },
            {
                data: 'total_acara',
                name: 'total_acara'
            },
            {
                data: 'kategori_vendor',
                name: 'kategori_vendor'
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

</script>
{{-- table 2  --}}

@endsection
