<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usedticket extends Model
{
    //
    protected $table = 'pantries';
    protected $fillable = [ 'about', 'services', 'operationhours', 'location', 'city', 'state', 'zip', 'email', 'phoneno'];

    
}
