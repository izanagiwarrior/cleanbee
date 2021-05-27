<?php

namespace App\Http\Controllers;

use App\Cucipakaian as AppCucipakaian;
use App\User;
use Illuminate\Http\Request;
use App\Models\cucipakaian;
use App\Models\cuciselimut;
use App\Models\cucisepatu;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('home', compact('widget'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function status_processSelimut(Request $request)
    {
        $cs = cuciselimut::find($request->id);
        if (is_null($cs['status'])) {
            $cs->status = "Order Confirmed";
            $cs->save();
        } elseif ($cs['status'] == "Order Confirmed") {
            $cs->status = "Pick-Up";
            $cs->save();
        } elseif ($cs['status'] == "Pick-Up") {
            $cs->status = "Process";
            $cs->save();
        } elseif ($cs['status'] == "Process") {
            $cs->status = "Deliver";
            $cs->save();
        } elseif ($cs['status'] == "Deliver") {
            $cs->status = "Finished";
            $cs->save();
        }

        return redirect(route('orderlistAdmin'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function status_processPakaian(Request $request)
    {
        $cs = cucipakaian::find($request->id);
        if (is_null($cs['status'])) {
            $cs->status = "Order Confirmed";
            $cs->save();
        } elseif ($cs['status'] == "Order Confirmed") {
            $cs->status = "Pick-Up";
            $cs->save();
        } elseif ($cs['status'] == "Pick-Up") {
            $cs->status = "Process";
            $cs->save();
        } elseif ($cs['status'] == "Process") {
            $cs->status = "Deliver";
            $cs->save();
        } elseif ($cs['status'] == "Deliver") {
            $cs->status = "Finished";
            $cs->save();
        }

        return redirect(route('orderlistAdmin'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function status_processSepatu(Request $request)
    {
        $cs = cucisepatu::find($request->id);
        if (is_null($cs['status'])) {
            $cs->status = "Order Confirmed";
            $cs->save();
        } elseif ($cs['status'] == "Order Confirmed") {
            $cs->status = "Pick-Up";
            $cs->save();
        } elseif ($cs['status'] == "Pick-Up") {
            $cs->status = "Process";
            $cs->save();
        } elseif ($cs['status'] == "Process") {
            $cs->status = "Deliver";
            $cs->save();
        } elseif ($cs['status'] == "Deliver") {
            $cs->status = "Finished";
            $cs->save();
        }

        return redirect(route('orderlistAdmin'));
    }
}
