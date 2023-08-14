<?php

namespace App\Models\Master_data;

use App\Models\Operational\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'specialists';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'name',
        'price',
    ];

    public function doctor(){
        return $this->hasMany(Doctor::class);
    }
}
