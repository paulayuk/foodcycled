<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usedticket extends Model
{
    //
    protected $table = 'usedtickets';
    protected $fillable = [ 'ticket_id', 'used_by'];

    
}
