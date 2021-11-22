<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Patient_Requests;

class IndexController extends Controller
{
    public function index()
    {
        $user_id = 3;
        $user = User::where('id', $user_id)->first();
        $provider = Provider::where('user_id', $user->id)->first();    
        

        $patient_requests = DB::table('patient_requests')
            ->join('patients', 'patients.id', 'patient_requests.patient_id')
            ->join('services', 'services.id', 'patient_requests.service_id')
            ->join('providers', 'providers.id', 'patient_requests.provider_id')
            ->select('patient_requests.*', 'patients.fname', 'patients.lname', 'services.name')
            ->get();

        // dd($patient_requests);

        
        return view('myProvider.requests', compact('provider', 'patient_requests'));
    }
}
