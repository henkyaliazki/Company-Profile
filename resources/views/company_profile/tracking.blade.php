@extends('layouts.layout')

@section('title', 'Tracking Shipment - Noval Ali Group')

@section('hero')
    @include('layouts.hero')
@endsection

@section('content')
    <body class="tracking-page">
    <main class="main">
        {{-- Tracking Section --}}
        <section id="tracking" class="tracking section py-5">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        {{-- Header --}}
                        <div class="mb-4">
                            <i class="bi bi-box-seam-fill fa-5x text-orange"></i>
                            <h2 class="fw-bold mt-3">Tracking Pengiriman</h2>
                            <p class="text-muted">Masukan nomor resi anda agar melihat status terupdate</p>
                        </div>

                        {{-- Form --}}
                        <form action="{{ route('track.shipment') }}" method="GET">
                            <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-lg me-2" name="tracking_code"
                                       placeholder="Example: SH00001" required>
                                <button type="submit" class="btn btn-orange rounded-1">LACAK</button>
                            </div>
                        </form>

                        {{-- Tracking Results --}}
                        @if(isset($result))
                            <div class="tracking-results bg-light p-4 rounded-3 shadow-sm">
                                <h3 class="fw-bold text-orange">Tracking Results</h3>
                                @if(isset($result['data']))
                                    <div class="summary my-3">
                                        <p><strong>Status:</strong> {{ $result['data']['summary']['status'] }}</p>
                                        <p><strong>Service:</strong> {{ $result['data']['summary']['courier'] }}</p>
                                        <p><strong>Tracking Number:</strong> {{ $result['data']['summary']['awb'] }}</p>
                                    </div>
                                    <h5 class="mt-4">History:</h5>
                                    <ul class="timeline list-unstyled mt-3">
                                        @foreach($result['data']['history'] as $history)
                                            <li class="mb-3">
                                                <span class="fw-bold">{{ $history['date'] }}</span>
                                                <br>
                                                <span>{{ $history['desc'] }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-danger">No tracking information available.</p>
                                @endif
                            </div>
                        @elseif(isset($error))
                            <div class="alert alert-danger mt-4">
                                {{ $error }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
    </body>

    {{-- Additional CSS --}}
    <style>
        .text-orange {
            color: #ff6600;
        }

        .btn-orange {
            background-color: #ff6600;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e65c00;
        }

        .tracking-results {
            text-align: left;
        }

        .tracking-results .summary {
            font-size: 1rem;
            color: #333;
        }

        .tracking-results .timeline li {
            border-left: 2px solid #ff6600;
            padding-left: 15px;
            position: relative;
        }

        .tracking-results .timeline li:before {
            content: "";
            width: 10px;
            height: 10px;
            background-color: #ff6600;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: -6px;
        }

        .tracking-results .timeline li:last-child {
            border-left: none;
        }
    </style>
@endsection
