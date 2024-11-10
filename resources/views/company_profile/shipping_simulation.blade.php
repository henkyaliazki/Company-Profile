@extends('layouts.layout')

@section('title', 'Tracking - Noval Ali Group')

@section('hero')
    @include('layouts.hero')
@endsection

@section('content')
    <main class="simulation page">
        <section id="shipping_simulation" class="simulation section">
            <div class="container mt-5">
                <div class="card shadow">
                    <div class="card-header bg-orange text-white text-center fw-bold">LOCATION</div>
                    <div class="card-body">
                        <form id="shippingForm" method="post" action="{{ route('simulation_done') }}">
                            @csrf
                            <div class="row">
                                <!-- From Area -->
                                <div class="col-md-4 mb-3">
                                    <label for="fromCity" class="form-label">Dari:</label>
                                    <select class="form-select" name="fromCity" id="fromCity">
                                        <option value="">Pilih Kota Asal</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- To Area -->
                                <div class="col-md-4 mb-3">
                                    <label for="toCity" class="form-label">Ke:</label>
                                    <select class="form-select" name="toCity" id="toCity">
                                        <option value="">Pilih Kota Tujuan</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Weight -->
                                <div class="col-md-4 mb-3">
                                    <label for="weight" class="form-label">Berat (KG):</label>
                                    <input type="number" name="weight" id="weight" class="form-control" placeholder="Masukan Berat Paket" required>
                                </div>
                            </div>

                            <!-- Costs Display -->
                            <div class="row text-center mt-4">
                                @foreach (['shippingCost', 'taxCost', 'insuranceCost', 'totalCost'] as $costType)
                                    <div class="col-md-3">
                                        <h6>{{ strtoupper(str_replace('Cost', ' COST', $costType)) }}</h6>
                                        <p id="{{ $costType }}" class="text-orange fw-bold">$0</p>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-orange" >Calculate Cost</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        .bg-orange {
            background-color: #ff6600;
        }

        .btn-orange {
            background-color: #ff6600;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e65c00;
        }

        .text-orange {
            color: #ff6600;
        }
    </style>
@endsection
