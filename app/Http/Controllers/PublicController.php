<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class PublicController extends Controller
{
    public function welcome()
    {
        $ads = Ad::take(6)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('ads'));
    }
}
