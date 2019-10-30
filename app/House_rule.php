<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House_rule extends Model
{
    protected $fillable = [
        'name',
        'value',
        'icon'
    ];    
}