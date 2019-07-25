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
        'country',
        'area',
        'block',
        'street',
        'avenue',
        'building_number',
        'place_type',
        'latitude',
        'longitude',
        'account_status',
    ];

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

}
