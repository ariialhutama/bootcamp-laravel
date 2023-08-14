<?php

namespace App\Models\Operational;

use App\Models\Master_data\Specialist;
use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'doctors';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'specialist_id',
        'name',
        'fee',
        'photo',
    ];
    
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function specialist(){
        return $this->belongsTo(Specialist::class);
    }
}
