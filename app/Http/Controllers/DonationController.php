<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatedtickets;

class DonationController extends Controller
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
    public function processDonation(Request $request)
    {
         Donatedtickets::create([
          'name'          =>   $request['name'],
          'address'       =>   $request['address'],
          'city'          =>   $request['city'],
          'state'         =>   $request['state'],
          'zipcode'       =>   $request['zipcode'],
          'donated_by'    =>   auth()->user()->email,
          'no_of_tickets' =>   $request['ticketno'],
          'comments'      =>   $request['comments'],
          'tracking_id'   =>   "FC-DT-".rand(23,1948)
        ]);

        return redirect()->back()->with('success', 'You have successfully donated tickets');
    }

    public function getAllDonatedTickets(){

      $tickets = Donatedtickets::where('donated_by',  auth()->user()->email)->get();
     
      return view('donate')->with('tickets', $tickets);
    }

    public function allDonatedTickets(){

      $tickets = Donatedtickets::where('donated_by',  auth()->user()->email)->get();
     
      return view('all-tickets')->with('tickets', $tickets);
    }
    
}
