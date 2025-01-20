<?php

namespace App\Http\Controllers;

use App\Mail\testEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestEmailController extends Controller
{
    public function index()
    {
Mail::to('aliazkidev@gmail.com')->send(new testEmail());
return '<h1>Email berhasil dikirim</h1>';
    }
}
