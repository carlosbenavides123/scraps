<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    protected $fillable = ['lat', 'lng', 'size', 'url'];
}
