<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatedtickets;
use App\User;

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
        return view('dashboard');
    }

    public function allPantries()
    {
        return view('all-pantries');
    }

    public function allDonatedTickets()
    {

        $tickets = Donatedtickets::where('donated_by',  auth()->user()->email)->get(); 
        return view('all-tickets');
    }

     public function allUsers()
    {
        $users = User::get();
        //dd($users);
        return view('all-users')->with('users');
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
        $tickets = Donatedtickets::where('donated_by',  auth()->user()->email)->get(); 
        
        return view('donate')->with('tickets');
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
