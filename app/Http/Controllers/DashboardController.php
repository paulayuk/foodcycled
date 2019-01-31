<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatedtickets;
use App\usedticket;
use App\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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

      $tickets = Donatedtickets::where('donated_by',  auth()->user()->email)->get();

      $utickets = usedticket::where('used_by',  auth()->user()->organization_name)->get();

    return view('dashboard')->with('tickets', $tickets)->with('utickets', $utickets);
    }

    public function allPantries()
    {
        return view('all-pantries');
    }

    public function allDonatedTickets()
    {

        return view('all-tickets');
    }

     public function allUsers()
    {
        $users = User::all();
 
        return view('all-users')->with('users', $users);
    }

    public function siteSettings()
    {
        return view('site-settings');
    }

    public function adminSettings()
    {
        return view('admin-settings');
    }

    public function redeemTickets()
    {
        return view('redeem-tickets');
    }

    public function donate()
    {
        
        
        return view('donate');
    }

     public function pantrySiteSettings()
    {
        return view('p-site-settings');
    }

    public function pantryProfile()
    {
        return view('pantry-profile');
    }
}
