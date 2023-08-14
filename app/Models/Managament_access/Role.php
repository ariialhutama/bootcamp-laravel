<?php

namespace App\Models\Management_access;

use App\Models\Management_access\Permission_role;
use App\Models\Management_access\Role_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Role extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'roles';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'title',
    ];

    public function permission_roles(){
        return $this->hasMany(Permission_role::class);
    }

    public function role_users(){
        return $this->hasMany(Role_user::class);
    }
}
