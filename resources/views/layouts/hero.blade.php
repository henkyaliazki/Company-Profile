@extends('layouts.layout')

@section('hero')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h4>PT. Noval Ali Group</h4>
            <p>Pengiriman Cepat, Aman, dan Terpercaya ke Seluruh Indonesia</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li href="{{ url('/tracking') }}">Tracking</li>
                    <li href="{{ url('/shipping-simulation') }}">Simulasi Biaya</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
@endsection
