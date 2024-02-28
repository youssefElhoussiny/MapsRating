<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Traits\RateableTrait;
use Illuminate\Http\Request;

class PlaceController extends Controller
{

    use RateableTrait;

    public function index()
    {
        $places = Place::orderBy('view_count')->take(3)->get();
        return view('welcome', compact('places'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        $place = $place::withCount('reviews')->find($place->id);
        $avg = $this->averageRating($place);
        $total = $avg['total'];
        $service_rating = $avg["service_rating"];
        $quality_rating = $avg['quality_rating'];
        $cleanliness_rating = $avg['cleanliness_rating'];
        $pricing_rating = $avg['pricing_rating'];

        return view('details', compact('place' , 'total' , 'service_rating' , 'quality_rating' , 'cleanliness_rating' , 'pricing_rating'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
