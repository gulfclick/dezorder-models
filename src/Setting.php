<?php

namespace DezOrderModels;;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'setting_key', 'setting_value', 'setting_placeholder'
    ];
}
