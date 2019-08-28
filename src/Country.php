<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name'
    ];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
