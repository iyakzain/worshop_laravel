<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $fillable = [
        'user_id',
        'address_line_1',
        'city',
        'state',
        'zip_code',
        'country',
    ];

    public $timestamps = false;
}
