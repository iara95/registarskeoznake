<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permit extends Model
{
    protected $fillable = [
        'vrijedi_od',
        'vrijedi_do',
        'tehnicki_pregled',
        'employee_id',
        'city_id',
        'car_id'
    ];

    public function employee() { return $this->belongsTo(Employee::class, 'employee_id');}
    public function city() { return $this->belongsTo(City::class, 'city_id');}
    public function car() { return $this->belongsTo(Car::class, 'car_id');}
    
}
