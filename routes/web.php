<?php

use App\Http\Controllers\dashHomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController ;
use App\Http\Controllers\PendingCampaignController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('go-home');

Route::get('/dashboard', function () {
    if (session('loginname')) {
        return view('welcome-dashboard');
    }
    // return view('welcome-dashboard');
    return view('dashboard.dashlog.login');
})->middleware(['admin']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// login by google
Route::get('auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])->name('auth.socilaite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('auth.socilaite.callback');

/* ---------------START PAGES ROUTES--------------- */

// about us page
Route::get('w', function () {
    return view('welcomeL');
});
// login
Route::get('login', function () {
    return view('auth.login');
})->name('login');

// signup
Route::get('signup', function () {
    return view('auth.register');
})->name('signup');

// about us page
Route::get('pages/about', function () {
    return view('pages.about.about');
})->name('go-about');

// Show kits based on the category (discuss it with the team)
Route::get('pages/causes/{cat_id}', [KitController::class, 'showAll'])->name('go-causes');

// Show single kit
Route::get('pages/causes/{cat_id}/{kit}/cause-single', [KitController::class, 'showSingleKit'])->name('go-cause-single');

// Contact us page
Route::get('pages/contact', [ContactController::class, 'contact'])->name('go-contact');
Route::post('/message_sent', [ContactController::class, 'sendEmail'])->name('contact.send');

// Donate pages (if not logged in redirect to login)

Route::get('pages/causes/{kit}/donate', [KitController::class, 'goDonate'])
    ->name('go-donate');

    Route::get('pages/events/{campaign}/donate-campaign', [CampaignController::class, 'goDonate'])
    ->name('go-donate-campaign')
    ->middleware(['auth']);

// Start donate supplies routes
Route::view('/donate/supplies', 'pages/donate/donate-eyes')->name('donate-supplies');
Route::post('/donate/supplies', [DonationController::class, 'store'])->name('supplies');
// End donate supplies routes

// Start donate financial routes
Route::view('/donate/financial', 'pages/donate/donate-financial')->name('donate-financial');
// End donate financial routes


Route::get('pages/causes/{kit}/donate', [KitController::class, 'goDonate'])->name('go-donate');

Route::get('donatelogin', function () {
    // return redirect()->route('login')->with('warning', 'Please login to continue donating.');
    return redirect()->route('login')->with('warning', 'Please continue login process.');
})->name('donatelogin');
// Route::get('pages/causes/{kit}/donate', function() {
//     return view('pages.donate.donate');
// })->name('go-donate');

//Paypal
Route::get('/success', [PaymentController::class, 'success']);
Route::post('pay', [PaymentController::class, 'pay'])->name('payment');

// Events page
Route::get('pages/events}', [CampaignController::class, 'index'])->name('go-events');

// Event-single page
Route::get('pages/events/{campaign}/event-single', [CampaignController::class, 'showSingleCampaign'])->name('go-event-single');

// Send Pending Campaign Route
Route::post('/pages', [PendingCampaignController::class, 'sendPendingCampaign'])->name('sendData');

// Volunteer page
Route::get('pages/volunteer', function () {
    return view('pages.volunteer.volunteer');
})->name('go-volunteer')
->middleware(['auth']);

Route::get('/tables', function () {
    return view('dashboard.dashboard_layouts.tables');
});


/* ---------------END PAGES ROUTES--------------- */

/* ---------------START Routes for DASHBOARD--------------- */
Route::get('/users', function () {
    return view('dashboard.users.index');
})->name('dashboard.users.index');

//-------------------login admin----------------//

// adminlogin
Route::get('/adminLogin', [LoginController::class, 'dashLogin']);
Route::post('/adminLogin', [LoginController::class, 'loginPost'])->name('adminLogin');
// Route::get('/home', [AdminController::class, 'adminIndex']);

// adminLogout
// Route::get('/home', [AdminController::class, 'adminIndex']);
Route::get('/adminLogout', [LoginController::class, 'adminLogout'])->name('adminLogout');




Route::resource('admins', AdminController::class);
Route::post('sendMails', [AdminController::class, 'sendMailToAllUsers'])->name('sendMailToUsers');
// Route::get('dashboard/admins/indexmain_sidebar',[AdminController::class,'indexmain_sidebar'])->name('admininfo');
Route::resource('dashboard/contactus', ContactController::class);

Route::resource('dashboard/categories', CategoryController::class )->middleware(['admin']);

Route::resource('campaigns', CampaignController::class);

Route::get('dashboard/campaigns/indexcampaign',[CampaignController::class,'indexcampaign'])->name('gocampaigns')->middleware(['admin']);

Route::resource('dashboard/kits', KitController::class)->middleware(['admin']);

Route::resource('dashboard/donations', DonationController::class)->middleware(['admin']);

Route::resource('dashboard/partners', PartnerController::class)->middleware(['admin']);

Route::resource('dashboard/payments', PaymentController::class)->middleware(['admin']);

Route::resource('dashboard/users', ProfileController::class)->middleware(['admin']);

Route::resource('dashboard', dashHomeController::class)->middleware(['admin']);

Route::resource('pendingcampaign', PendingCampaignController::class);


Route::get('/kits', function () {
    return view('dashboard.kits.index');
})->name('dashboard.kits.index');


// ------ ENDS Routes for DASHBOARD --------------------------------
// home page
Route::get('pages', [HomeController::class, 'index'])->name('go-home');
Route::get('pages/about', [AboutController::class, 'index'])->name('go-about');

// Delete event when countdown is 0
Route::match(['get', 'delete'], '/delete-campaign/{campaign}', [CampaignController::class, 'delete'])->name('delete-campaign');


Route::get('/certificate/download',[ProfileController::class, 'download'])->name('certificate.download');
