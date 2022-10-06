<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'location',
        'whatsappNum',
        'PhoneNum',
        'message',
    ];
    protected $hidden=[
        'created_at',
    ];
}
