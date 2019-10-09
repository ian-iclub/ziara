<?php

namespace App\Http\Controllers;

use App\Offer;
use App\Place;
use App\Settings;
use App\Slider;
use App\User;
use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Throwable;
use function response;

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

            $offer['period'] = implode(' / ', array_unique($offer->activeOffers->pluck('period')->toArray()));

        }

        $settings = Settings::all()->first();

        return view('admin.admin', compact('offers', 'settings'));
    }

    public function places()
    {
        return Place::all();
    }

    public function offers()
    {
        return Offer::all();
    }

    public function sliderIndex()
    {
        $sliders = Slider::all();

        return view('admin.sliders.index', compact('sliders'));
    }

    public function sliderEdit(Slider $slider)
    {
        $sliders = Slider::all();

        $display_form = true;

        return view('admin.sliders.index', compact('slider', 'sliders', 'display_form'));
    }

    public function sliderStore(Request $request)
    {
        $path = "";

        if ($request->hasFile('logo')) {
            $path = Storage::putFile('uploads/sliders', $request->file('logo'));

//                self::success('Document of ' . $request->input('name') . ' created successfully');
        }

//        return $path;

        $slider = new Slider();
        $slider->image_url = $path;
        $slider->title = $request->get('title');
        $slider->message = $request->get('message');

        try {
            $slider = $slider->saveOrFail();

//            return \response()->json($place);

        } catch (Throwable $e) {
//            return \response()->json($e);
        }

        return redirect()->route('sliders.index');
    }

    public function sliderUpdate(Request $request, Slider $slider)
    {

        if ($request->hasFile('logo')) {
            $path = Storage::putFile('uploads/sliders', $request->file('logo'));

//                self::success('Document of ' . $request->input('name') . ' created successfully');

            $slider->image_url = $path;
        }

        $slider->title = $request->get('title');
        $slider->message = $request->get('message');

        if ($slider->save()) {

            return redirect()->route('sliders.index');
//            self::success('Visitor ' . $visitor->name . ' has been updated.');
        }

        return response()->json(["updated" => false]);
    }

    public function sliderDestroy(Slider $slider)
    {
        //
        try {
            $slider->delete();
        } catch (Exception $e) {
        }

        return redirect()->route('sliders.index');
//        return \response()->json(["destroyed" => true]);
    }

    public function editMessages(Request $request)
    {

        config(['settings.offer_type' => $request->type]);
        config(['settings.offer_message' => $request->message]);

        return redirect()->route('admin');
    }

    // User management
    public function userIndex()
    {
        $users = User::all();

        // return $users;

        return view('admin.users.index', compact('users'));
    }

    public function userEdit(User $user)
    {
        $users = User::all();

        $display_form = true;

        return view('admin.users.index', compact('user', 'users', 'display_form'));
    }

    public function userStore(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        try {
            $user = $user->saveOrFail();

//            return \response()->json($place);

            } catch (Throwable $e) {
    //            return \response()->json($e);
            }

        return redirect()->route('users.index')->withSuccess('User created');
    }

    public function userUpdate(Request $request, User $user)
    {
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        if ($user->save()) {

            return redirect()->route('users.index');
//            self::success('Visitor ' . $visitor->name . ' has been updated.');
        }

        return response()->json(["updated" => false]);
    }

    public function userDestroy(User $user)
    {
        //
        try {
            $user->delete();
        } catch (Exception $e) {

        }

        return redirect()->route('users.index')->withSuccess('User deleted successfully');
//        return \response()->json(["destroyed" => true]);
    }
}
