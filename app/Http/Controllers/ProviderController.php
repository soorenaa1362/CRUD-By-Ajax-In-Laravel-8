<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function list()
    {        
        $providers = Provider::all();
        return view('list', compact('providers'));
    }

}
