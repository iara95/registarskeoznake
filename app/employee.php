<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'ime',
        'prezime',
        'oib',
        'user_id'
    ];
}
