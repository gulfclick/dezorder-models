<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorDriver extends Model
{

    protected $fillable = [
        'vendor_id',
        'driver_id'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

}
