<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient.index');
    }


    public function create()
    {
        dd('dsfd');
    }


    public function list()
    {
        $patients = Patient::all();
        return view('patient.list', compact('patients'));
    }
}
