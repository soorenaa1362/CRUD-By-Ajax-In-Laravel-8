<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Provider;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class ProviderController extends Controller
{
    public function index()
    {
        return view('provider.index');
    }


    public function create()
    {
        return view('provider.create');
    }


    public function store(Request $request)
    {         
        $myDate=Carbon::createFromTimestamp($request->birthday)->format('Y/m/d');
        $myDateJalali=Jalalian::fromDateTime($myDate)->format('Y/m/d');        

        $id = $request->id; 
        if($id > 0){ 
            $provider = Provider::where('id', $id)->first(); 
            if($provider)
            { $provider->fname = $request->fname;
                $provider->lname = $request->lname;
                $provider->nationalcode = $request->nationalcode;
                $provider->birthday = $myDate;
                $provider->sex = $request->sex;
                $provider->married = $request->married;
                $provider->tel = $request->tel;
                $provider->user_id = $request->user_id;
                $provider->update();
            }
           
        }else{
            $provider = new Provider();
            $provider->fname = $request->fname;
            $provider->lname = $request->lname;
            $provider->nationalcode = $request->nationalcode;
            $provider->birthday = $myDate;
            $provider->sex = $request->sex;
            $provider->married = $request->married;
            $provider->tel = $request->tel;
            $provider->user_id = $request->user_id;
            $provider->save();              
        }  
        return $provider;
    }


    public function list()
    {        
        $providers = Provider::all();
        return view('provider.list', compact('providers'));
    }


    public function edit($provider_id=null)
    {
        if($provider_id > 0){
            $provider = Provider::where('id', $provider_id)->first();
            return view('provider.edit', compact('provider'));
        }
    }


    public function delete($provider_id=null)
    {
        if($provider_id > 0){
            Provider::destroy($provider_id);
        }
    }


}
