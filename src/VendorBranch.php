<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class VendorBranch extends Model
{
    protected $fillable = [
        'vendor_id',
        'name',
        'mobile',
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
		'contact_person'
    ];
	
	public function country()
	{
		return $this->belongsTo(Country::class);
	}
	
	public function area()
	{
		return $this->belongsTo(Area::class);
	}
	
	public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function getAddress($vendorBranchId)
	{
		$vendorBranch = VendorBranch::find($vendorBranchId);
		$country = Country::find($vendorBranch->country_id)->name;
		$area = Area::find($vendorBranch->area_id)->name;
		return $country . ' ' . $area . ' ' . $vendorBranch->block . ' ' . $vendorBranch->street . ' ' . $vendorBranch->avenue . ' ' . $vendorBranch->building_number;
	}
}
