<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $table = 'lib_task';
    protected $primary_key = 'id';
    protected $fillable = [
        'title',
        'description',
        'status',
        'from_project',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
