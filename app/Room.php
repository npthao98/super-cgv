<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = ['name','desc','cinema_id'];

    public $timestamps = false;
}
