<?php

namespace App\Models\Master_data;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'consultations';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'name',
    ];

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
