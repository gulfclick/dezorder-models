<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class JobLog extends Model
{
    protected $fillable = [
        'job_id',
        'status'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
