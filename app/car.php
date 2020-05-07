<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = [
        'tip_vozila',  
        'marka',
        'model',
        'godina_proizvodnje',
        'osig_kuca',
        'broj_police',
        'driver_id',
        'reg_oznaka'
    ];

    public function driver() { return $this->belongsTo(driver::class, 'driver_id');}
}
