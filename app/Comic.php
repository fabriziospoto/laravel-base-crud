<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
           'personaggio','storia','numero','editore','anno'
       ];
}
