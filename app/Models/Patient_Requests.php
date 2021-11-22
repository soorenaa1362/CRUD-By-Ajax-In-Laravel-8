<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Patient_Requests extends Model
{
    use HasFactory;

    protected $table = "patient_requests";

    protected $fillable = [
        'service_id',
        'user_id',
        'patient_id',
        'request_status_id',
        'provider_id'
    ];


    public function Patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
