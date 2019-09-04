<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Place;
use Illuminate\Contracts\Support\Renderable;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $offers = Place::has('activeOffers')->with('activeOffers')->get();

        foreach ($offers as $offer) {
            collect($offer);

//            array_push($period, $offer->activeOffers->pluck('period'));

//            $offer['period'] = array_unique(array_flatten($period));

            $offer['period'] = implode('/', array_unique($offer->activeOffers->pluck('period')->toArray()));

        }

        return view('admin.admin', compact('offers'));
    }

    public function places()
    {
        return Place::all();
    }

    public function offers()
    {
        return Offer::all();
    }
}
