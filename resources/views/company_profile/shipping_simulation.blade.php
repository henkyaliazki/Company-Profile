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
                    <div class="card-header bg-orange text-white text-center fw-bold">
                        LOCATION
                    </div>
                    <div class="card-body">
                        <form id="shippingForm" method="post">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="fromCity" class="form-label">Dari :</label>
                                    <select class="form-select" name="fromCity" id="fromCity">
                                        <option value="select">Pilih Kota Asal</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="toCity" class="form-label">Ke :</label>
                                    <select class="form-select" name="toCity" id="toCity">
                                        <option value="select">Pilih Kota Tujuan</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="weight" class="form-label">Berat (KG) :</label>
                                    <input type="text" id="weight" class="form-control"
                                           placeholder="Masukan Berat Paket">
                                </div>
                            </div>

                            <!-- Costs Display -->
                            <div class="row text-center mt-4" id="costDisplay">
                                <div class="col-md-4">
                                    <h6>Kargo</h6>
                                    <p id="shippingCostKargo" class=" fw-bold">Rp. </p>
                                    <p id="estimatedDaysKargo" class="fw-bold">Estimasi </p>
                                </div>
                                <div class="col-md-4">
                                    <h6>Regular</h6>
                                    <p id="shippingCostRegular" class="fw-bold">Rp.</p>
                                    <p id="estimatedDaysRegular" class="fw-bold">Estimasi </p>
                                </div>
                                <div class="col-md-4">
                                    <h6>Sameday</h6>
                                    <p id="shippingCostYes" class="fw-bold">Rp.</p>
                                    <p id="estimatedDaysYes" class="fw-bold">Estimasi </p>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center mt-4">
                                <button type="button" id="calculateBtn" class="btn btn-orange">Hitung Biaya</button>
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

    <script>
        document.getElementById('calculateBtn').addEventListener('click', function () {
            let fromCity = document.getElementById('fromCity').value;
            let toCity = document.getElementById('toCity').value;
            let weight = document.getElementById('weight').value;

            fetch('{{ route("simulation_done") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({fromCity, toCity, weight})
            })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('shippingCostKargo').innerHTML = '';
                    document.getElementById('estimatedDaysKargo').innerHTML = '';
                    document.getElementById('shippingCostRegular').innerHTML = '';
                    document.getElementById('estimatedDaysRegular').innerHTML = '';
                    document.getElementById('shippingCostYes').innerHTML = '';
                    document.getElementById('estimatedDaysYes').innerHTML = '';

                    data.costDetails.forEach(costDetail => {
                        if (costDetail.service === "JTR") {
                            document.getElementById('shippingCostKargo').innerHTML = ` ${costDetail.cost[0].value.toLocaleString()}`;
                            document.getElementById('estimatedDaysKargo').innerHTML = ` ${costDetail.cost[0].etd} hari`;
                        } else if (costDetail.service === "REG") {
                            document.getElementById('shippingCostRegular').innerHTML = ` ${costDetail.cost[0].value.toLocaleString()}`;
                            document.getElementById('estimatedDaysRegular').innerHTML = ` ${costDetail.cost[0].etd} hari`;
                        } else {
                            document.getElementById('shippingCostYes').innerHTML = ` ${costDetail.cost[0].value.toLocaleString()}`;
                            document.getElementById('estimatedDaysYes').innerHTML = ` ${costDetail.cost[0].etd} hari`;
                        }
                        console.log(costDetail)
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
