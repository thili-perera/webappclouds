<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'contact',
        'email',
        'gender',
        'street_no',
        'street_address',
        'city',
        'status',
    ];
    protected $table = 'clients';
    use HasFactory;
}
