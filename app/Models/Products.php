<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    Protected $fillable =[
        'name',
        'email',
        'amount',
        'price',
        'is_active',
    ];
}
