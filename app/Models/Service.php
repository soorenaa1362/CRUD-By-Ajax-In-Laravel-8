<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    public function Patient_Requests()
    {
        return $this->belongsTo(Patient_Requests::class);
    }
}
