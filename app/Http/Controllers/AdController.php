<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdController extends Controller
{

    public function byCategory(Tag $tag) {
        return view('ads.byCategory', ['ads' => $tag->ads()->paginate(8), 'tag' => $tag]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ads.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return view('store.ad');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ad $ad)
    {
        return view('ads.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
