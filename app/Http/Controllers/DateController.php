<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class DateController extends Controller
{
    public function index()
    {
        $date = Jalalian::forge(1970/01/01);
        dd($date);
    }
}
