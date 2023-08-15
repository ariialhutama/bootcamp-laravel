<?php

namespace App\Models\Operational;

use App\Models\Master_data\Consultation;
use App\Models\Operational\Transaction;
use App\Models\Operational\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'appointments';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function consultation(){
        return $this->belongsTo(Consultation::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function transaction(){
        return $this->hasOne(Transaction::class);
    }
}

