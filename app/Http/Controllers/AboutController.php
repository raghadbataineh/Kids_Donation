<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\User;
use App\Models\Payment;
use App\Models\Donation;
use App\Models\EventAll;

class AboutController extends Controller
{
    public function index()
    {
        $user = User::count();
        $donation = Donation::count();
        $event = EventAll::count();
        $totalSum = Payment::sum('Amount');
        $Partners=Partner::all();
        return view('pages.about.about',compact('user','Partners','totalSum','donation', 'event'));
    }
}
