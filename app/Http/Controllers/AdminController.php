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
        $offer = new Offer();
        $offers = collect($offer->offers);

        // var_dump($offers);

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
