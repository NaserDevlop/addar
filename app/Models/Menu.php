<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


 class Menu extends  Model
{
protected $fillable = [
    'name',
    'image',
    'price',
    'cla',
    'type',
    'class',
    'note',
 ];


}
