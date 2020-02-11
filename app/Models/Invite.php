<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'user_id','event_id','name','email','token','status',
     ];
}
