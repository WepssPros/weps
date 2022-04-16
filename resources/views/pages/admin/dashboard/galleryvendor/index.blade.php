@extends('layouts.admin')

@section('Dashboard-Content')

<!-- Main content -->

<!-- Main content header -->
<div class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">


    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard - Admin - GalleryVendor' )   }}

    </h2>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        Nama Produk :
        {{$vendor->name}}
    </h2>


    <div class="space-y-6 md:space-x-2 md:space-y-0">
    </div>
</div>
<!-- Main content header -->


<!-- Start Content -->

<div class="py-1">
    <div class="flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row">
        <div class="mb-10 pt-2">
            <a href="{{ route('dashboard.vendors.gallery.create', $vendor->id) }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                + Upload Photos
            </a>
            <a href="{{ route('dashboard.vendor.index') }}"
                class="bg-green-500 hover:bg-green-700 ml-3 text-white font-bold py-2 px-4 rounded shadow-lg">
                << Kembali </a> </div> <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <table id="crudTable">
                            <thead>
                                <tr>
                                    <th class="px-2 py-4">ID</th>
                                    <th class="px-2 py-4">Nama Produk</th>

                                    <th class="px-6 py-4">Photo</th>

                                    <th class="px-6 py-4">Action</th>
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
                width: '5%'
            },
            {
                data: 'vendor.name',
                name: 'vendor.name'
            },
            {
                data: 'url',
                name: 'url'
            },

            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width: '25%'
            },
        ],
    });

</script>
{{-- table 2  --}}

@endsection
