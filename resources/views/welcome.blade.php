@extends('layouts.app')
@section('title', 'Halaman Utama')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    Selamat Datang di Halaman Utama
                    <p>Ini adalah konten halaman utama.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection