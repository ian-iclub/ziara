<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $offer = new Offer();
        $offers = collect($offer->offers);

        // foreach ($offers as $offer) {
        //     $offer = (object) $offer;

        //     // return var_dump($offer->image);
        // }
        // return var_dump($offers);
//        return view('index', compact('offers'));

        return response()->json($offers);
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
        $offer = Offer::create($request->all());
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
    }

    public function frontendOffers()
    {
        $offers = Offer::all();
        return view('index', compact('offers'));
    }
}
