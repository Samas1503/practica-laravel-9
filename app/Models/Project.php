<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $table = 'lib_project';
    protected $primary_key = 'id';
    protected $fillable = [
        'title',
        'description',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
