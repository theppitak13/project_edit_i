<?php

namespace App\Models;
// namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'phone',
        'email',
        'website',
        'description',
        'income',
        'total_assets',
    ];
}
