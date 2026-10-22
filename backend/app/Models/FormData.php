<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'age',
        'phone',
        'address',
        'resp_name',
        'resp_phone',
        'interest',
    ];
}
