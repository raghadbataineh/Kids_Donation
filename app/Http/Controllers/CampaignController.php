<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\EventAll;
use Illuminate\Http\Request;



class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::paginate(5);
        // Return a view with the campaigns data
        return view('pages.events.events', ['campaigns' => $campaigns]);
        // return view ('dashboard\campaign\index');
    }

    public function indexcampaign()
    {
        // $campaigns= Campaign::select('*');
        // return view ('dashboard\campaign\index', compact('campaigns'));
        $campaigns=Campaign::all();
        return view ('dashboard.campaign.index', compact('campaigns'));
    }

    public function showSingleCampaign(Campaign $campaign)
    {
        // The $campaign parameter will already contain the Campaign object
        // No need to search again by ID
        $moreCampaigns = Campaign::where('id', '!=', $campaign->id)->inRandomOrder()->limit(3)->get();
        // Return a view with the campaign data
        return view('pages.events.event-single.event-single', ['campaign' => $campaign, 'moreCampaigns' => $moreCampaigns]);
    }

    /**
     * Summary of deleteOnCountDown
     * @param \App\Models\Campaign $campaign
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function delete(Campaign $campaign)
    {
        try {
            // Delete the campaign
            $campaign->delete();

            // Return a success response
            return response()->json(['message' => 'Event deleted successfully']);
        } catch (\Exception $e) {
            // Return an error response in case of an exception
            return response()->json(['error' => 'Error deleting event'], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.campaign.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campaign = new Campaign();
        $eventall = new EventAll();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|nullable|image', // Assuming you're expecting an image file
            'target_money' => 'required|numeric|min:0',
            'end_date' => 'required|date|after_or_equal:today',
        ]);

        $campaign->title = $request->input('title');
        $eventall->title = $request->input('title');
        $campaign->description = $request->input('description');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $campaign->image = $imageName;
        }

        $campaign->target_money = $request->input('target_money');
        $campaign->raised_money = 0;
        $campaign->start_date = date('Y-m-d');
        $campaign->end_date = $request->input('end_date');
        $campaign->active = 1;


        $campaign->save();
        $eventall->save();


        return redirect()->route('gocampaigns')->with('success', 'Campaign created successfully');
    }
    public function goDonate(Campaign $campaign)
    {
        session(['donationType' => 'campaign']);
        session(['campaign' => $campaign]);
        $moreCampaigns = Campaign::where('id', '!=', $campaign->id)->get();
        return view('pages.donate.donate-campaign', ['campaign' => $campaign, 'moreCampaigns' => $moreCampaigns]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $campaigns = Campaign::findOrFail($id);

        return view('dashboard.campaign.edit', compact('campaigns'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_money' => 'required|numeric|min:0',
            'end_date' => 'required|date|after_or_equal:today',
        ]);



        $campaigns = Campaign::findOrFail($id);
        $campaigns->title = $request->input('title');
        $campaigns->description = $request->input('description');
        $campaigns->target_money = $request->input('target_money');
        // $campaigns->raised_money = $request->input('raised_money');
        // $campaigns->start_date = $request->input('start_date');
        $campaigns->end_date = $request->input('end_date');
        $campaigns->active = $request->input('Status');

       
        if ($request->hasFile('new_image')) {
            $image = $request->file('new_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $campaigns->image = $imageName;
        }


        $campaigns->save();

        return redirect()->route('gocampaigns')->with('success', 'Campaign updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Campaign::destroy($id);
        return back()->with('success', ' deleted successfully.');
    }
}
