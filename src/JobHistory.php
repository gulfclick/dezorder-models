<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    protected $fillable = [
        'job_id', 'driver_id', 'driver_latitude', 'driver_longitude', 'status', 'duration_minutes'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
