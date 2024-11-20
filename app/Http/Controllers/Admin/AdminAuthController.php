<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    //
    public function getLogin()
    {
        return view('admin.auth.login' , [

        ]);
    }

    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $hr = Admin::where('username' , $request->input('username'))->first();

        if ($hr) {
            if(auth()->guard('admin')->attempt(['username' => $request->input('username'),  'password' => $request->input('password')])){
                $user = auth()->guard('admin')->user();

                return redirect()->route('admin.dashboard')->with('success','You are Logged in sucessfully.');

            } else {
                return back()->withErrors(['password' => 'Incorrect Password'])->withInput();
            }
        } else {
            return back()->withErrors(['username' => 'The provided username does not exist.'])->withInput();
        }

    }


    public function logout()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('superadmin.login'));
    }
}
