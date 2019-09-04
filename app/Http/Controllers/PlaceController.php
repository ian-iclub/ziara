<?php

namespace App\Http\Controllers;

use App\Place;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Throwable;

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
        $places = Place::withCount('offers')->get();

//        return response()->json($places);

        return view('admin.places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return null;
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
        $path = "";

        if ($request->hasFile('logo')) {
            $path = Storage::putFile('uploads/places', $request->file('logo'));

//                self::success('Document of ' . $request->input('name') . ' created successfully');
        }

//        return $path;

        $place = new Place();
        $place->image_url = $path;
        $place->title = $request->get('title');
        $place->location = $request->get('location');

        try {
            $place = $place->saveOrFail();

//            return \response()->json($place);

        } catch (Throwable $e) {
//            return \response()->json($e);
        }

//        if ($place = Place::create($place)) {
//
//
//
////            self::success('Visitor ' . $request->input('name') . ' created successfully');
//        } else {
////            self::warning('Visitor ' . $request->input('name') . ' could not be created');
//        }

        return redirect()->route('places.index');

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
        $places = Place::withCount('offers')->get();

//        return response()->json($places);
        $display_form = true;

        return view('admin.places.index', compact('places', 'place', 'display_form'));

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


        if ($request->hasFile('logo')) {
            $path = Storage::putFile('uploads/places', $request->file('logo'));

//                self::success('Document of ' . $request->input('name') . ' created successfully');

            $place->image_url = $path;
        }

        $place->title = $request->get('title');
        $place->location = $request->get('location');

        if ($place->save()) {

            return redirect()->route('places.index');
//            self::success('Visitor ' . $visitor->name . ' has been updated.');
        }

        return \response()->json(["updated" => false]);
//        return redirect()->route('places.index');
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
        try {
            $place->delete();
        } catch (Exception $e) {

        }
        return redirect()->route('places.index');
//        return \response()->json(["destroyed" => true]);
    }
}
