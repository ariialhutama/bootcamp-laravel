<?php

namespace App\Models\Master_data;

use App\Models\Management_access\Detail_user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type_user extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'type_users';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
       'name',
    ];

    public function detail_users (){
        return $this->hasMany(Detail_user::class);
    }
}
