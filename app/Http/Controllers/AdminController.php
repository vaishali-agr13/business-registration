<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessRegistration;
use App\Models\Appointment;
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
        
            $totalBusiness = BusinessRegistration::count();

            $totalAppointments = Appointment::count();

            $totalClosedAppointments = Appointment::where('status', 'closed')->count();

            $totalOpenAppointments = Appointment::where('status', 'open')->count();

            return view('admin.dashboard', compact(
                'totalBusiness',
                'totalAppointments',
                'totalClosedAppointments',
                'totalOpenAppointments'
            ));

    }

    public function registrations(Request $request)
    {
        $query = BusinessRegistration::query();

            // Business Name
            if ($request->name) {
                $query->where('name', 'like', '%' . $request->name . '%');
            }

            // Email
            if ($request->email) {
                $query->where('email', 'like', '%' . $request->email . '%');
            }

            // Phone (both fields check)
            if ($request->phone) {
                $query->where(function ($q) use ($request) {
                    $q->where('business_phone', 'like', '%' . $request->phone . '%')
                    ->orWhere('personal_phone', 'like', '%' . $request->phone . '%');
                });
            }

            // Date Filter
            if ($request->from_date && $request->to_date) {
                $query->whereBetween('created_at', [
                    $request->from_date,
                    $request->to_date
                ]);
            }

            $data = $query->latest()->get();

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