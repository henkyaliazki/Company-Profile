<?php

namespace App\Http\Controllers;

use App\Mail\OrderNotification;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function showOrderForm()
    {
        return view('company_profile.order');
    }

    public function submitOrder(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'destination' => 'required|string',
            'package_type' => 'required|string|in:Cargo,Regular,Same Day',
        ]);

//         Simpan data ke database
        $order = Order::create($request->all());

        Mail::to('aliazkidev@gmail.com')->send(new OrderNotification($order));

        return redirect()->route('order.form')->with('success', 'Pesanan Anda berhasil dibuat.');
    }
}

