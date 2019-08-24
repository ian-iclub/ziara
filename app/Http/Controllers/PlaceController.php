<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return Place::all();
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
        if ($place = Place::create($request->all())) {

            if ($request->hasFile('image')) {
                $path = Storage::putFile('uploads/places', $request->file('image'));

//                self::success('Document of ' . $request->input('name') . ' created successfully');
            }

//            self::success('Visitor ' . $request->input('name') . ' created successfully');
        } else {
//            self::warning('Visitor ' . $request->input('name') . ' could not be created');
        }

        return redirect()->route('admin');

    }

    /**
     * Display the specified resource.
     *
     * @param Place $place
     * @return Response
     */
    public function show(Place $place)
    {
        //
        return response($place);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Place $place
     * @return Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Place $place
     * @return Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Place $place
     * @return Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
