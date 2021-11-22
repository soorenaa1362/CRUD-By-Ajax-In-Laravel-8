<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'access',
        'confirmed',        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    const confirmed =
        [
            0   => [   'id'    =>  0     ,   'title'   =>  'غیرفعال'  ],
            1   => [   'id'    =>  1     ,   'title'   =>  'فعال'     ],
        ];


    public function getConfirmedTitle()
    {
        $status = self::confirmed;
        return $status[$this->confirmed]['title'];
    }


    const access =
        [
            1   => [   'id'    =>  1     ,   'title'   =>  'بیمار'       ],
            2   => [   'id'    =>  2     ,   'title'   =>  'منشی'        ],
            3   => [   'id'    =>  3     ,   'title'   =>  'سرویس دهنده'],
            4   => [   'id'    =>  4     ,   'title'   =>  ' مدیر'       ],
        ];


    public function getAccessTitle()
    {
        $status = self::access;
        return $status[$this->access]['title'];
    }











}
