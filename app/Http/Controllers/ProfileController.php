<?php

namespace App\Http\Controllers;

use PDF; // Import the PDF facade

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Donation;
use App\Models\Payment;



class ProfileController extends Controller
{


    public function index()
    {
        $users=User::all();
        return view ('dashboard/users/index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

        $users = new User();

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = Hash::make ($request->input('password'));

       

        $users->save();

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function edit(Request $request): View
    {
        $id = Auth::id();
        $donations = Donation::where('user_id', $id)->get();
        $payments = Payment::where('user_id', $id)->get();

        return view('profile.edit', [
            'user' => $request->user(),
            'donations'=>$donations,
            'payments'=>$payments,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }



public function destroy($id = null): RedirectResponse
{
    if ($id === null) {
        // User is trying to delete their own account
        $request = request();

        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('success', 'Your account has been deleted successfully.');
    } else {
        // Admin or other authorized user is trying to delete another user's account
        User::destroy($id);
        return back()->with('success', 'User deleted successfully.');
    }
}

    public function download()
    {
        // Fetch the user and project information
        $user = auth()->user(); // You can adjust this to retrieve the user as needed
        // $projects = $user->projects; // Assuming you have a relationship set up

        $id = Auth::id();
        $donations = Donation::where('user_id', $id)->get();
        $payments = Payment::where('user_id', $id)->get();

        // Load the HTML template
        $html = view('\pages\temp', compact('user', 'donations', 'payments'));

        // Generate PDF
        $pdf = PDF::loadHTML($html);

        // Optional: Set PDF options
        // $pdf->setOption('isPhpEnabled', true);

        // Save or download the PDF
        return $pdf->download('participation_certificate.pdf');
    }


}
