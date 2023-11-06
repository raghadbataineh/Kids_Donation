<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins=Admin::all();
        return view ('dashboard/admins/index', compact('admins'));
    }

    public function indexmain_sidebar()
    {
        $admins=Admin::all();
        return view ('dashboard.dahboard_layouts.main-sidebar', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif |max:2048',
            // Add any desired image validation rules
            'email' => 'required|email|unique:admins',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

        $admins = new Admin();

        $admins->name = $request->input('name');
        $admins->email = $request->input('email');
        $admins->password = Hash::make ($request->input('password'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $admins->image = $imageName;
            // $storedPath = $uploadedFile->store('public/photo');
            $admins->save();
        }

        $admins->save();

        return redirect()->route('admins.index')->with('success', 'Admin created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admins = Admin::findOrFail($id);

        return view('dashboard.admins.edit', compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admins , $id)
    {
        $request->validate([
            'name' => 'required',
            'new_image' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            // Add any desired image validation rules
            'email' => 'required|email|unique:users',

        ]);

        $admins = Admin::findOrFail($id);


        $admins->name = $request->input('name');
        $admins->email = $request->input('email');
        // $admins->password = Hash::make ($request->input('password'));

        if ($request->hasFile('new_image')) {
            $image = $request->file('new_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $admins->image = $imageName;
        }

        if ($request->filled('password')) {
            $admins->password = Hash::make($request->input('password'));
        }


        $admins->save();

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return back()->with('success', 'Admin deleted successfully.');
    }

    public function sendMailToAllUsers(Request $request) {
        $title = $request->input('title');
        $message = $request->input('message');
        session(['emailToAll' => $title]);
        $users = User::all();

        foreach($users as $user) {
            Mail::to($user->email)->send(new ContactMail($title, $message));
        }
        session()->forget('emailToAll');
        return back()->with('message_sent', 'Your Email has been sent to all users successfully');
    }

}
