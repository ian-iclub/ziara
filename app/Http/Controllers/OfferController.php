<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Place;
use App\Settings;
use App\Slider;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //
        $places = Place::all();

        if ($request->has('place_id')) {
            $place = $request->input('place_id');

            $offers = Offer::where('place_id', $place)->get();

            $offer_place = Place::where('id', $place)->get();

            return view('admin.offers.index', compact('places', 'offers', 'offer_place'));

        } else {
            $offers = Offer::with('place')->get();

            return view('admin.offers.index', compact('places', 'offers'));
        }

        return view('admin.offers.index', compact('places', 'offers'));

//        return response()->json($offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //

//        return $request;

        $offer = Offer::create($request->all());

        return redirect()->route('offers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\offer  $offer
     * @return Response
     */
    public function show(offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offer  $offer
     * @return Response
     */
    public function edit(offer $offer)
    {
        //
        $places = Place::all();

        $offers = Offer::with('place')->get();

        $display_form = true;

//        return $offer;
        return view('admin.offers.index', compact('places', 'offers', 'offer', 'display_form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\offer  $offer
     * @return Response
     */
    public function update(Request $request, offer $offer)
    {
        //

        try {
            $offer->update($request->all());

            return redirect()->route('offers.index');

        } catch (Throwable $e) {

            return $e;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offer  $offer
     * @return Response
     */
    public function destroy(offer $offer)
    {
        //
        try {
            $offer->delete();
        } catch (Exception $e) {
        }
        return redirect()->route('offers.index');
    }

    public function frontendOffers()
    {
        $offers = Place::has('activeOffers')->with('activeOffers')->get();

        $slider = Slider::all()->first();

        foreach ($offers as $offer) {
            collect($offer);

            $offer['period'] = implode('/', array_unique($offer->activeOffers->pluck('period')->toArray()));
        }

        $settings = Settings::all()->first();

        return view('index', compact('slider', 'offers', 'settings'));
    }

    public function activate(Request $request)
    {

        $offer = Offer::where('id', $request->id)->first();

        $offer->active = !$offer->active;

        $offer->save();

        return redirect()->route('offers.index');
    }
}
