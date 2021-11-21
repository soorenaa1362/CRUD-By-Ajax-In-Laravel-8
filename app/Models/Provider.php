<?php

namespace App\Models;

use Morilog\Jalali\Jalalian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory;

    protected $table = "providers";

    protected $fillable = [
        'fname',
        'lname',
        'nationalcode',
        'sex',
        'birthday',
        'married',
        'tel',
        'user_id'
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


    const married = 
        [
            0 => ['id' => 0 , 'title' => 'مجرد' ],
            1 => ['id' => 1 , 'title' => 'متاهل'],
        ];

    public function getMarriedTitle()
    {
        $status = self::married;
        return $status[$this->married]['title'];
    }



    public function getdateJalali()
    {
        if (!is_null($this->birthday))
            return Jalalian::fromDateTime($this->birthday)->format('Y/m/d');
        return null;
    }


    public function getdateTimestamp()
    {
        if (!is_null($this->birthday))
            return Jalalian::fromDateTime($this->birthday)->getTimestamp();
        return null;
    }


}
