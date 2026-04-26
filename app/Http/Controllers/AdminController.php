<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth; 



class AdminController extends Controller
{

    public function login()
    {
       return view('admin.login');
    }



    public function authenticate(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                $request->session()->regenerate(); // security
                //session(['admin' => true]);

                $user = Auth::user();

                return redirect('/admin/dashboard');
            }

          

            return back()->withErrors([
                'email' => 'Invalid credentials'
            ])->withInput();
        }

    // public function authenticate(Request $request)
    // {
    //     if($request->email == "admin@gmail.com" && $request->password == "123456"){
    //         session(['admin' => true]);
    //         return redirect('/admin/dashboard');
    //     }

    //     return back()->with('error','Invalid Login');
    // }

    public function dashboard()
    {
        $total = BusinessRegistration::count();

        return view('admin.dashboard',compact('total'));
    }

    public function registrations()
    {
        $data = BusinessRegistration::all();
        return view('admin.registrations_list',compact('data'));
    }

    public function view($id)
    {
        $data = BusinessRegistration::find($id);
        return view('admin.view',compact('data'));
    }

    public function download($file)
    {
            return Storage::disk('public')->download('uploads/'.$file);
    }

   
    public function logout(Request $request)
        {
            Auth::logout(); 

            $request->session()->invalidate(); // session clear
            $request->session()->regenerateToken(); // new CSRF token

                return redirect('backend/admin/login')->with('success','Logged out successfully');
        }

    
}