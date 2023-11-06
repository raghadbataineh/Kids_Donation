<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Donation;
use App\Models\Kit;
use App\Models\Payment;

class dashHomeController extends Controller


{
    public function Index()
    {
        $kitCount = Kit::count();
        $userCount = User::count();
        $adminCount = Admin::count();
        $paymentCount = Payment::count();

        return view('dashboard.welcome-dashboard', compact('kitCount', 'userCount', 'adminCount', 'paymentCount'));
    }


    public function adminIndex()
    {
        return view('dashboard.dashlog.home');
    }

}
