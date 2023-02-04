<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
    use HasFactory;
    
    protected $table = 'lib_comment';
    protected $primary_key = 'id';
    protected $fillable = [
        'commentary',
        'commented_by',
        'created_at',
        'updated_at'
    ];
}
