<?php

namespace App\Models\Master_data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Config_payment extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'config_payments';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable =[
        'fee',
        'vat',
    ];

    
}
