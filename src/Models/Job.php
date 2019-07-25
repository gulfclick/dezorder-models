<?php

namespace CargoLogisticsModels\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        // basic information
        'vendor_id',
        'driver_id',
        'instructions',

        // pickup
        'pickup_country',
        'pickup_area',
        'pickup_block',
        'pickup_street',
        'pickup_avenue',
        'pickup_building_number',
        'pickup_place_type',
        'pickup_latitude',
        'pickup_longitude',
        'pickup_date',
        'pickup_time',

        // destination
        'destination_country',
        'destination_area',
        'destination_block',
        'destination_street',
        'destination_avenue',
        'destination_building_number',
        'destination_place_type',
        'destination_latitude',
        'destination_longitude',
        'destination_date',
        'destination_time',

    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function pickupAddress($jobId)
    {
        $job = Job::find($jobId);
        return $job->pickup_country . ' ' . $job->pickup_area . ' ' .  $job->pickup_block . ' ' . $job->pickup_street . ' ' . $job->pickup_avenue . ' ' . $job->pickup_building_number;
    }

    public function destinationAddress($jobId)
    {
        $job = Job::find($jobId);
        return $job->destination_country . ' ' . $job->destination_area . ' ' .  $job->destination_block . ' ' . $job->destination_street . ' ' . $job->destination_avenue . ' ' . $job->destination_building_number;
    }
}
