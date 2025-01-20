<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class CekOngkirController extends Controller
{
    private $apiKey = 'c0ac098679e491cc77754e9b0e8b0c54';

    private  $urlCity = 'https://api.rajaongkir.com/starter/city';

    private $urlCost = 'https://api.rajaongkir.com/starter/cost';

    public function shipping_simulation()
    {
        $cities = Cache::remember('cities', 60, function () {
            $response = Http::withHeaders(['key' => $this->apiKey])
                ->get($this->urlCity);
            return $response['rajaongkir']['results'];
        });

        return view('company_profile.shipping_simulation', ['cities' => $cities]);
    }

    public function simulation_done(Request $request)
    {
        $request->validate([
            'fromCity' => 'required',
            'toCity' => 'required',
            'weight' => 'required|numeric|min:1',
        ]);

        $responseCost = Http::withHeaders(['key' => $this->apiKey])
            ->post($this->urlCost, [
                'origin' => $request->fromCity,
                'destination' => $request->toCity,
                'weight' => $request->weight,
                'courier' => 'jne'
            ]);
        $costData = $responseCost->json();
        return response()->json([
            'costDetails' => $costData['rajaongkir']['results'][0]['costs']
        ]);


    }

    private function getCities()
    {
        return Cache::get('cities');
    }
}
