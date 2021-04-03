<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function  settings() {
        return view('settings');
    }

    public function profile(request $request){
        if ($request->isMethod('GET')) {
            $data= User::find(Auth::user()->id);

        return view('settings')->with('data',$data);
        }
        if ($request->isMethod('POST')) {
        $updatedata = User::findOrNew(Auth::user()->id);
        $updatedata->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'job'=>$request->job,
            'bio'=>$request->bio,
            ]);

        $updatedata->save();
        }

        $success = array(
            'success' => 'Successfully Added'
        );

        $error = array(
            'error' => 'Fatal error'
        );

        return redirect('settings')->with($success, $error);
    }
}
