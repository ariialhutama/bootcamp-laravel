<?php

namespace App\Models\Management_access;

use App\Models\Management_access\Permission_role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'permissions';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
       'title',
    ];

    public function permission_roles (){
        return $this->hasMany(Permission_role::class);
    }
}
