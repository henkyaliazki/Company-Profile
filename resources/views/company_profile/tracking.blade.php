@extends('layouts.layout')

@section('title', 'Tracking Shipment - Noval Ali Group')

@section('hero')
    @include('layouts.hero')
@endsection

@section('content')
    <body class="tracking-page">
    <main class="main">
        {{--        tracking section--}}
        <section id="tracking" class="tracking section">

            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <i class="bi bi-box-seam-fill fa-5x text-orange"></i>
                            <h2 class="fw-bold mt-3">Tracking Shipment</h2>
                            <p class="text-muted">Enter your tracking code</p>
                        </div>

                        <form action="{{ route('track.shipment') }}" method="GET">
                            <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-lg me-2" name="tracking_code"
                                       placeholder="Example: SH00001" required>
                                <button type="submit" class="btn btn-orange rounded-1">SEARCH</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    </body>

    <!-- Tambahan style jika diperlukan -->
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
    </style>
@endsection
