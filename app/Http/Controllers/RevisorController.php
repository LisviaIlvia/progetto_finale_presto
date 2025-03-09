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
        return redirect()->back()->with('message', "Hai accettato l'articolo $ad->title");
    }
    public function reject(Ad $ad)
    {
        $ad->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'articolo $ad->title");
    }

    public function becomeRevisor() {
        $user = Auth::user();
        Mail::to('admin@presto.it')->send(new BecomeRevisor($user));
        return redirect()->route('homepage')->with('message', 'Complimenti, hai chiesto di diventare revisor');
    }

    public function makeRevisor(User $user) {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
}
