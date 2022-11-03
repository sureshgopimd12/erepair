<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = [
        'id',
        'name',
        'phone',
        'address',
        'pincode',
        'electronic_appliance',
        'problem_description',
        'attach_image'
    ];
}
