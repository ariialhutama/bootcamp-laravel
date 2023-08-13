<?php

namespace App\Models\Management_access;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission_role extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'permission_roles';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'permission_id',
        'role_id',
    ];
}
