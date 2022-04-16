@extends('layouts.admin')

@section('Dashboard-Content')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Calon Vendor &raquo; {{ $calonvendor->name_vendor }} &raquo; Edit
    </h2>
</x-slot>
<!DOCTYPE html>
<html lang="en">



    <body>
        <section class="footer">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

                body {
                    font-family: 'Poppins', sans-serif;
                }

                :root {
                    --white-1: #ffffff;
                    --white-2: #eeeeee;
                    --white-3: #ecf1f4;
                    --black: #000909;
                    --dark: #0A0F16;
                    --subtleGreen: #90BCB7;
                    --darkGreen: #082D28;
                    --darkTosca: #569B9B;
                    --tosca-1: #00FFD1;
                    --tosca-2: #27D7D7;
                    --tosca-3: #3FE8FF;
                    --deepTosca-1: #016A6A;
                    --deepTosca-2: #02A6A6;
                    --grey-1: #888888;
                    --grey-2: #666666;
                }

                .text-28 {
                    font-size: 28px;
                }

                .text-24 {
                    font-size: 24px;
                }

                .text-20 {
                    font-size: 20px;
                }

                .text-white-1 {
                    color: var(--white-1);
                }

                .text-white-2 {
                    color: var(--white-2);
                }

                .text-white-3 {
                    color: var(--white-3);
                }

                .text-grey-1 {
                    color: var(--grey-1);
                }

                .text-grey-2 {
                    color: var(--grey-2);
                }

                .bg-gradient-footer {
                    background: linear-gradient(293.57deg, #114E4E 0%, #052D2D 23.8%, #041111 42.57%, #000909 63.76%, #000909 69.62%);
                }

            </style>
            <main class="bg-gradient-footer footer md:divide-y-2">
                <footer class="px-4 pt-20 mx-auto max-w-screen-2xl lg:px-24">
                    <div class="grid gap-16 lg:grid-cols-12">
                        <div class="md:col-span-12 lg:col-span-6">
                            <!-- WorkLy Logo -->
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-workly/Logo.svg"
                                alt="workly" />
                            <div class="mt-3 mb-1 text-base font-semibold text-white-3">Nama Vendor
                            </div>
                            <div class="mb-2 text-base font-semibold text-white-3">{{ $calonvendor->name_vendor }}
                            </div>
                            <div class="mt-3 mb-1 text-base font-semibold text-white-3">Nama User
                            </div>
                            <div class="mb-2 text-base font-semibold text-white-3">{{ $calonvendor->user->name }}
                            </div>
                            <div class="mt-3 mb-1 text-base font-semibold text-white-3">Username Vendor
                            </div>
                            <div class="mb-2 text-base font-semibold text-white-3">{{ $calonvendor->user->username }}
                            </div>
                            <p class="text-base font-normal text-white-3">
                                Alamat Vendor
                            </p>
                            <p class="text-base font-normal text-white-3">
                                {{$calonvendor->alamat_vendor}}
                            </p> <!-- social media icons SVG -->
                        </div>
                        <div class="md:col-span-4 lg:col-span-2">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-workly/Logo.svg"
                                alt="workly" />
                            <div class="mb-5 mt-2 text-base font-bold text-white-3"> Detail Daerah </div>
                            <div class="mb-3">

                                <p class="text-base font-bold text-white-3">
                                    PROVINSI
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->provinsi_vendor}}
                                </p>
                            </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    KOTA
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    Kota {{$calonvendor->provinsi_vendor}}
                                </p>
                            </div>
                        </div>
                        <div class="md:col-span-4 lg:col-span-2">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-workly/Logo.svg"
                                alt="workly" />
                            <div class="mb-5 mt-2 text-base font-bold text-white-3"> Detail Vendor </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    LAMA BERDIRI
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->umur_vendor}}
                                </p>
                            </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    TOTAL PEMESANAN
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->total_acara}} ++ Pesanan
                                </p>
                            </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    KATEGORI VENDOR
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->kategori_vendor}}
                                </p>
                            </div>


                        </div>
                        <div class="md:col-span-4 lg:col-span-2">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-workly/Logo.svg"
                                alt="workly" />
                            <div class="mb-5 mt-2 text-base font-bold text-white-3"> Status Vendor </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    STATUS PENERIMAAN
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->status}}
                                </p>
                            </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    TANGGAL DIBUAT
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->created_at}}
                                </p>
                            </div>
                            <div class="mb-3">
                                <p class="text-base font-bold text-white-3">
                                    TANGGAL DI UPDATE
                                </p>
                                <p class="text-base font-normal text-white-3">
                                    {{$calonvendor->updated_at}}
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="mx-auto mt-16 max-w-screen-2xl py-9">
                    <p class="text-base font-normal text-center text-white-3"> 2022 Wesp.com | All rights reserved </p>
                </div>
            </main>
        </section>
    </body>

</html>
@endsection
