<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pantry;


class PantryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updatePantrySite(Request $request)
    {
         Pantry::create([
          'about'          => $request['about'],
          'services'       => $request['services'],
          'operationhours' => $request['ophours'],
          'location'       => $request['location'],
          'city'           => $request['city'],
          'name'           => Auth::user()->organization_name,
          'state'    =>   $request['state'],
          'zip'      =>   $request['zip'],
          'email'    =>   $request['email'],
          'phoneno'  =>   $request['phoneno']
        ]);

        return redirect()->back()->with('success', 'You have successfully updated your site information');
    }

    public function about(){

      $about = Pantry::where('name',  $name)->get(['about']);
     
      return view('pantry.about')->with('about', $about);
    }

    public function contact($name){

      $contact = Pantry::where('name',  $name)->get(['phoneno', 'email', 'location', 'city', 'state']);
     
      return view('pantry.contact')->with('contact', $contact);
    }

    public function services($name){

      $services = Pantry::where('name',  $name)->get(['services']);
     
      return view('pantry.services')->with('services', $services);
    }

    public function home($name){

      $name = Donatedtickets::where('donated_by',  $name)->get();
     
      return view('pantry.index')->with('name', $name);
    }

}
