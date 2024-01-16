<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nid',
        'email',
        'phone',
        'center_id',
        'status'
    ];
}
