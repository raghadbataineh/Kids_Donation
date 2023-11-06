<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donations=Donation::all();
        return view ('dashboard/donations/index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'title' => 'required|string',
        //     'phone' => 'required|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif', // Add the 'mimes' rule here
        //     'city' => 'required|string',
        //     'Description' => 'required|string',
        // ]);

        // Create a new instance of the Donation model and populate it with the validated data
        $donation = new Donation();
        $donation->user_id = $request->input('UserId'); // Assuming 'UserId' is the field name in your form
        $donation->title = $request->input('title');
        $donation->phone = $request->input('phone');
        $donation->type = $request->input('city');
        $donation->Description = $request->input('Description');

        // Handle the image upload and store the file path in the database
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $donation->image = $imageName;
        }

        // Save the donation record to the database
        $donation->save();

        // Optionally, you can redirect the user to a success page or perform other actions

        // Return a response to the user
        return redirect()->route('go-home')->with('success', 'Donation created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        Donation::destroy($id);
    return back()->with('success', 'Admin deleted successfully.');
    }

}


