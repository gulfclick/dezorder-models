<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        // basic information
        'vendor_id',
        'driver_id',
        'distance',
        'instructions',
        'unique_number',
        'status',
        'proof',

        // pickup
        'pickup_address',
        'pickup_description',
        'pickup_place_type',
        'pickup_latitude',
        'pickup_longitude',
        'pickup_date',
        'pickup_time',
        'pickup_contact_person',
        'pickup_contact_phone',

        // destination
        'dropoff_address',
        'dropoff_description',
        'dropoff_place_type',
        'dropoff_latitude',
        'dropoff_longitude',
        'dropoff_date',
        'dropoff_time',
        'dropoff_contact_person',
        'dropoff_contact_phone',

    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
