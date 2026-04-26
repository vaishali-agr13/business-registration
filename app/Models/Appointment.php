<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
                            'user_id',
                            'name',
                            'email',
                            'phone',
                            'appointment_date',
                            'time_slot',
                            'service',
                            'message',
                            'status',
                            'created_by'
                        ];
}
