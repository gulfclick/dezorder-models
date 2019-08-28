<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'email',
        'phone',
        'mobile',
        'password',
        'menu',
        'contact_person',
        'country_id',
        'area_id',
        'block',
        'street',
        'avenue',
        'building_number',
        'floor',
        'unit_number',
        'place_type',
        'latitude',
        'longitude',
        'delivery_fee',
        'service_charge',
        'account_status',
    ];
	
	public function country()
	{
		return $this->belongsTo(Country::class);
	}
	
	public function area()
	{
		return $this->belongsTo(Area::class);
	}

    public function drivers()
    {
        return $this->hasMany(VendorDriver::class, 'vendor_id', 'id');
    }

    public function approvedDrivers()
    {
        return $this->hasMany(VendorDriver::class, 'vendor_id', 'id')
                    ->join('drivers', function ($join) {
                        $join->on('vendor_drivers.driver_id', '=', 'drivers.id')
                             ->where('drivers.account_status', 'LIKE', 'approved');
        });
    }

    public function getAddress($vendorId)
	{
		$vendor = Vendor::find($vendorId);
		$country = Country::find($vendor->country_id)->name;
		$area = Area::find($vendor->area_id)->name;
		return $country . ' ' . $area . ' ' . $vendor->block . ' ' . $vendor->street . ' ' . $vendor->avenue . ' ' . $vendor->building_number;
	}
}
