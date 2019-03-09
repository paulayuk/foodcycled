<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donatedtickets;
use App\usedticket;

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
          'donated_by'    =>   auth()->user()->organization_name,
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

      public function useTicket(Request $request){

      if($request){

         $tickets = Donatedtickets::where('tracking_id',  $request['ticket_no'])->first();

        usedticket::create([
            'ticket_id'          =>   $request['ticket_no'],
            'used_by'            =>  auth()->user()->organization_name
          ]);
    
        $tickets->update([
           'no_of_tickets' => $tickets->no_of_tickets - 1
        ]);
      }
       
      return redirect()->back()->with('success', 'You have successfully used a ticket');
    }
    
}
