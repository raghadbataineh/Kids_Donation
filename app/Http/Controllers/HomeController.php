<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kit;
use App\Models\category;
use App\Models\Campaign;
use App\Models\Partner;
use App\Models\User;
use App\Models\Payment;
use App\Models\Donation;
use App\Models\EventAll;

// use App\Models\Partner;
// use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
       $user = User::count();
       $donation = Donation::count();
       $event = EventAll::count();
       $totalSum = Payment::sum('Amount');
       $catagories=category::all();
       $kits = Kit::inRandomOrder()
       ->limit(6)
       ->get();
       $campaigns = Campaign::inRandomOrder()->limit(4)->get();
       $Partners=Partner::all();
       return view('pages.index',compact('user','catagories', 'kits', 'campaigns', 'Partners','totalSum','donation', 'event'));
    }
}
