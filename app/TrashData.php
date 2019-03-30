<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrashData extends Model
{
    protected $fillable = ['long', 'lat', 'file_location'];
}
