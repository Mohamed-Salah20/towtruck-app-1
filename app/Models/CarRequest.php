<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRequest extends Model
{
    use HasFactory;

    protected $table = 'carRequests';
    protected $fillable = [
        'username',
        'userlocation',
        'userphonenumber',
        'driverphonenumber',
        'drivername',
        'driverlocation',
    ];
}
