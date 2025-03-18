<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class PublicController extends Controller
{
    public function welcome()
    {
        $ads = Ad::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome', compact('ads'));
    }

    public function searchAd(Request $request)
    {
        $query = $request->input('query');
        $ads = Ad::search($query)->where('is_accepted', true)->paginate(10);
        return view('ads.searched', compact('ads', 'query'));
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
