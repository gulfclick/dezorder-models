<?php

namespace CargoLogisticsModels\Models;

use Illuminate\Database\Eloquent\Model;

class VendorBranch extends Model
{
    protected $fillable = [
        'vendor_id',
        'name',
        'mobile',
        'country',
        'area',
        'block',
        'street',
        'avenue',
        'building_number',
        'place_type',
        'latitude',
        'longitude',
    ];
	
	public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
