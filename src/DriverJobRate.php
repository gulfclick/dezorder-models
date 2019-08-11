<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class DriverJobRate extends Model
{
    protected $fillable = [
        'driver_id', 'job_id', 'rate', 'comment'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
