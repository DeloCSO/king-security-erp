<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guard extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'guard_code',
        'first_name',
        'middle_name',
        'last_name',
        'mobile',
        'alternate_mobile',
        'email',
        'date_of_birth',
        'gender',
        'aadhaar_number',
        'pan_number',
        'esi_number',
        'epf_uan',
        'bank_name',
        'bank_account_number',
        'ifsc_code',
        'basic_salary',
        'daily_wage',
        'address',
        'city',
        'state',
        'pincode',
        'joining_date',
        'relieving_date',
        'employment_status',
        'photo',
        'notes',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'joining_date' => 'date',
        'relieving_date' => 'date',
        'basic_salary' => 'decimal:2',
        'daily_wage' => 'decimal:2',
    ];
}