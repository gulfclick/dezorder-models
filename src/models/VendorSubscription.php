<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class VendorSubscription extends Model
{
    protected $fillable = [
        'vendor_id',
        'from_date',
        'to_date',
    ];
	
	public function vendor()
	{
		return $this->belongsTo(Vendor::class);
	}
}
