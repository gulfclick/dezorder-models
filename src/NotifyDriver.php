<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class NotifyDriver extends Model
{
    protected $fillable = [
        'driver_id', 'job_id', 'driver_distance', 'status'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
	

	public function getDriverDistanceAttribute($value)
	{
		return round($value/1000, 2, PHP_ROUND_HALF_UP);
	}
}
