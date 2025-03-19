<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{

    public function index()
    {

        $ad_to_check = Ad::where('is_accepted', null)->first();
        return view('revisor.index', compact('ad_to_check'));
    }

    public function accept(Ad $ad)
    {
        $ad->setAccepted(true);
        return redirect()->back()->with('message', __("ui.ad_accepted", ['title' => $ad->title]));
    }
    public function reject(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect()->back()->with('message', __("ui.ad_rejected", ['title' => $ad->title]));
    }

    public function workWithUs() {
        return view('revisor.work-with-us');
    }

    public function becomeRevisor() {
        $user = Auth::user();
        Mail::to('admin@presto.it')->send(new BecomeRevisor($user));
        return redirect()->route('homepage')->with('message',  __('ui.become_reviewer_message'));
    }

    public function makeRevisor(User $user) {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
}
