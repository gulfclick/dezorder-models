<?php

namespace CargoLogisticsModels;

use Illuminate\Database\Eloquent\Model;

class NotificationLog extends Model
{
    protected $fillable = [
        'notification_data', 'notification_to', 'notification_options', 'notification_response'
    ];
}
