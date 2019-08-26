<?php

namespace CargoLogisticsModels;

use App\User;
use Illuminate\Database\Eloquent\Model;

class VendorBranchAccount extends Model
{
    protected $fillable = [
        'vendor_branch_id',
        'user_id',
        'is_active'
    ];

    public function vendorBranch()
    {
        return $this->belongsTo(VendorBranch::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
