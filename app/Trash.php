<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    protected $fillable = ['lat', 'long', 'size', 'url'];
}
