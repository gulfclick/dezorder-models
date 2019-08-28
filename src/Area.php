<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'country_id', 'name'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
