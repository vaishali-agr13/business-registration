<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessRegistration extends Model
{
    protected $fillable = [
        'email',
        'business_phone',
        'personal_phone',
        'business_address',
        'business_type',
        'business_description',
        'district',
        'services_required',
        'registration_fees',
        'payment_proof',
        'business_image',
        'name',
        'company_name',
        'password'
    ];
}