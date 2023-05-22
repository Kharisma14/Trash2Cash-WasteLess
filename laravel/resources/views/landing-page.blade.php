@extends('layouts.base')
 
@section('title', 'Home | ')
 
@section('content')
    <div class="about flex flex-col lg:flex-row lg:space-x-16 xl:space-x-32 space-y-8 lg:space-y-0 items-center">
        <img src="{{ asset('img/landing-page/about.jpg') }}" class="w-[60%] lg:w-[50%] xl:w-[550]">
        <div class="about-text flex xl:flex-col flex-wrap">
            <h1 class="text-5xl text-[#FF8833] font-extrabold">WasteLess</h1>
            <p class="mt-4 mb-10 lg:text-lg">Platform untuk masyarakat Indonesia melakukan jual beli sampah agar dapat membantu rumah tangga dan industri dalam masalah pengelolaan sampah.</p>
            <a href="{{route('login.view')}}" class="w-[50%] lg:w-[80%] py-3 px-8 font-medium text-center text-lg bg-slate-50 hover:bg-[#FF8833] border-2 border-[#FF8833] text-[#FF8833] hover:text-neutral-50 rounded-3xl transition ease-in-out delay-150 hover:scale-110 duration-300">
                Mari Bergabung 
             </a>
        </div>
    </div>
    <div class="layanan mt-24">
        <h1 class="text-4xl font-semibold">Layanan</h1>
        <div class="grid grid-cols-2 xl:grid-cols-3 gap-8">
            <div class="pendataan">
                <x-layanan-card title="Penjualan" image="{{ asset('img/landing-page/iconPendataan.png') }}" desc="Sampah yang kamu punya dapat dijual pada marketplace dan dikelola disini." route="#"></x-layanan-card>
            </div>
            <div class="marketplace">
                <x-layanan-card title="Marketplace" image="{{ asset('img/landing-page/iconMarketplace.png') }}" desc="Tempat untuk kamu melakukan transaksi sampah yang belum diolah dan sudah diolah." route="{{route('home-page')}}"></x-layanan-card>
            </div>
            <div class="pendapatan">
                <x-layanan-card title="Pendapatan" image="{{ asset('img/landing-page/iconPendapatan.png') }}" desc="Hasil dari penjualan yang telah kamu dapatkan pada marketplace dapat kamu kelola disini." route="#"></x-layanan-card>
            </div>
        </div>
    </div>
    <div class="jenis-sampah mt-24">
        <h1 class="text-4xl font-semibold">Jenis Sampah</h1>
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-8">
            <div class="plastik">
                <x-jenis-sampah-card title="Plastik" image="{{ asset('img/landing-page/plastic.png') }}"></x-jenis-sampah-card>
            </div>
            <div class="kaca-kaleng">
                <x-jenis-sampah-card title="Kaca & Kaleng" image="{{ asset('img/landing-page/glass.png') }}"></x-jenis-sampah-card>
            </div>
            <div class="elektronik">
                <x-jenis-sampah-card title="Elektronik" image="{{ asset('img/landing-page/electronic.png') }}"></x-jenis-sampah-card>
            </div>
            <div class="kertas">
                <x-jenis-sampah-card title="Kertas" image="{{ asset('img/landing-page/paper.png') }}"></x-jenis-sampah-card>
            </div>
        </div>
    </div>
@endsection