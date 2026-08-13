@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row row-deck row-cards">
    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-primary text-white avatar"><i class="ti ti-car"></i></span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">{{ $totalDokumen }}</div>
                        <div class="text-secondary">Kendaraan Masuk</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-green text-white avatar"><i class="ti ti-receipt"></i></span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">{{ $totalGaleri }}</div>
                        <div class="text-secondary">Transaksi Hari Ini</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-yellow text-white avatar"><i class="ti ti-parking"></i></span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">{{ $totalVideo }}</div>
                        <div class="text-secondary">Slot Tersedia</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="bg-azure text-white avatar"><i class="ti ti-cash"></i></span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">Rp {{ number_format($totalPengunjung) }}</div>
                        <div class="text-secondary">Pendapatan Hari Ini</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection