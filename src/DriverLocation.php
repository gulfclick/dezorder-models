<?php

namespace DezOrderModels;;

use Illuminate\Database\Eloquent\Model;

class DriverLocation extends Model
{
    protected $fillable = [
        'driver_id', 'latitude', 'longitude'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
