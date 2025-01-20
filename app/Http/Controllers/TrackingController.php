<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    private $apiKey = 'a476dd2ef42bbc70a088f2581c1064d84ec2e4dde95e9a098cb9abb3b89e8b0c';
    private $baseUrl = 'https://api.binderbyte.com/v1/track';

    public function trackShipment(Request $request)
    {
        $trackingCode = $request->input('tracking_code');
        $courier = 'jnt';

        try {
            $response = Http::withHeaders([
                'key' => $this->apiKey
            ])->get($this->baseUrl, [
                'api_key' => $this->apiKey,
                'courier' => $courier,
                'awb' => $trackingCode
            ]);

//            dd($response->json());

            if ($response->successful()) {
                $result = $response->json();
                return view('company_profile.tracking', ['result' => $result]);
            } else {
                throw new \Exception('Failed to fetch tracking data');
            }
        } catch (\Exception $e) {
            return view('company_profile.tracking', ['error' => 'Failed to retrieve tracking information.']);
        }
    }
}
