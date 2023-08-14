<?php

namespace App\Models\Management_access;

use App\Models\Master_data\Type_user;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail_user extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'detail_users';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'doctor_id',
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'age',
    ];

    public function type_user (){
        return $this->belongsTo(Type_user::class);
    }
    public function user (){
        return $this->belongsTo(User::class);
    }
}
