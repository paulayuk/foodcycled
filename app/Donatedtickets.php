<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donatedtickets extends Model
{
    //
    //
     protected $fillable = [
     'name', 'donated_by', 'state', 'city', 'zipcode', 'address', 'no_of_tickets', 'comments', 'tracking_id'
    ];
     
}
