<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";

    protected $fillable = [
        'fname',
        'lname',
        'nationalcode',
        'sex',
        'age',
        'married',
        'mobile',
        'mainid',
    ];


    const sex =
        [
            0   => [   'id'    =>  0     ,   'title'   =>  'آقای'  ],
            1   => [   'id'    =>  1     ,   'title'   =>  'خانم'  ],
        ];


    public function getSexTitle()
    {
        $status = self::sex;
        return $status[$this->sex]['title'];
    }
}
