<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'transport_mode',
        'driver_type',
        'fixed_commission',
        'commission_percent',
        'licence_file',
        'licence_expiration_date',
        'availability',
        'account_status',
    ];

    public function vendors()
    {
        return $this->hasMany(VendorDriver::class);
    }
	
	public function changeAvailability($id, $availability)
	{
		Driver::find($id)->update(['availability' => $availability]);
	}

    public function locations()
    {
        return $this->hasMany(DriverLocation::class);
    }
	
}
