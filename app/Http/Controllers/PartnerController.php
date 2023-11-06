<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $partners=Partner::all();
        return view ('dashboard/partners/index', compact('partners'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.partners.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $partners = new Partner();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $partners->image = $imageName;

        }

        $partners->save();

        return redirect()->route('partners.index')->with('success', 'Kit created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partners = Partner::findOrFail($id);

        return view('dashboard.partners.edit', compact('partners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partners , $id)
    {
        $partners = Partner::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $partners->image = $imageName;

        }

        $partners->save();

        return redirect()->route('partners.index')->with('success', 'Kit created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        Partner::destroy($id);
        return back()->with('success', ' deleted successfully.');
    }
}
