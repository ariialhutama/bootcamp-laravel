<?php

namespace App\Models\Management_access;

use App\Models\Management_access\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role_user extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'role_users';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
       'role_id',
       'user_id',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
