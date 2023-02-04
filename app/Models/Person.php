<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'lib_person';
    protected $primary_key = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'dni',
        'address',
        'created_at',
        'updated_at'
    ];
}
