<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class JobItem extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
        'job_id', 'quantity', 'item_description', 'item_price'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
