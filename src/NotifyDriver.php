<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class NotifyDriver extends Model
{
    protected $fillable = [
        'driver_id', 'job_id', 'status'
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
