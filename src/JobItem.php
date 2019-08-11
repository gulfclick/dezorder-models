<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class JobItem extends Model
{
    protected $fillable = [
        'job_id', 'item_description', 'item_price', 'quantity'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
