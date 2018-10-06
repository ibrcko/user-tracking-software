<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Tracker;

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
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $visits = Tracker::sessions();

        if ($user->is_admin)
            return view('admin')->with([
                'visits' => $visits,
            ]);
        else
            return view('not-allowed');

    }

    /**
     *
     * @param $visitId
     * @return \Illuminate\Http\Response
     */
    public function agent($visitId)
    {
        $user = Auth::user();

        $visit = Tracker::sessions()->find($visitId);

        if ($user->is_admin)
            return view('agent')->with([
                'agent' => $visit->agent,
            ]);
        else
            return view('not-allowed');

    }

    /**
     *
     * @param $visitId
     * @return \Illuminate\Http\Response
     */
    public function referer($visitId)
    {
        $user = Auth::user();

        $visit = Tracker::sessions()->find($visitId);

        if ($user->is_admin)
            return view('referer')->with([
                'referer' => $visit->referer,
            ]);
        else
            return view('not-allowed');

    }

    /**
     *
     * @param $visitId
     * @return \Illuminate\Http\Response
     */
    public function cookie($visitId)
    {
        $user = Auth::user();

        $visit = Tracker::sessions()->find($visitId);

        if ($user->is_admin)
            return view('cookies')->with([
                'cookie' => $visit->cookie,
            ]);
        else
            return view('not-allowed');

    }

    /**
     *
     * @param $visitId
     * @return \Illuminate\Http\Response
     */
    public function logs($visitId)
    {
        $user = Auth::user();

        $visit = Tracker::sessions()->find($visitId);

        if ($user->is_admin)
            return view('logs')->with([
                'logs' => $visit->log,
            ]);
        else
            return view('not-allowed');

    }
}
