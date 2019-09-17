<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param Settings $settings
     * @return Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Settings $settings
     * @return Response
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Settings $settings
     * @return Response
     */
    public function update(Request $request, Settings $settings)
    {
        $settings = Settings::all()->first();

        $settings->offer_type = $request->offer_type;
        $settings->offer_message = $request->offer_message;

        $settings->save();

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Settings $settings
     * @return Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
