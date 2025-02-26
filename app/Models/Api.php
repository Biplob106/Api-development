<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'apis';

    protected $fillable = ['name', 'email', 'address', 'phone', 'description'];
    
}
