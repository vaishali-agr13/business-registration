<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessRegistration;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmittedMail;
use Barryvdh\DomPDF\Facade\Pdf;

class BusinessRegistrationController extends Controller
{

    // public function create()
    // {
    //     return view('business.form');
    // }
    public function index(){
        return view('business.form');
    }

    public function landingView(){
        return view('business.landing_view');
    }

    public function show($id)
        {
            $registration = BusinessRegistration::findOrFail($id);

            return view('admin.view-details', compact('registration'));
        }

    public function storeStep1(Request $request)
    { 
       

            try {

                    $request->validate([
                        'name' => 'required',
                        'personal_phone' => 'required',
                        'district' => 'required',
                    ]);

                     session(['step1' => $request->all()]);

                    // 🔥 CASE 1: UPDATE FLOW (SESSION EXISTS)
                    if (session('step1')['registration_id']) {
                        $registration = BusinessRegistration::find(session('step1')['registration_id']);

                        if (!$registration) {
                            session()->forget('registration_id');
                            return back()->with('error', 'Session expired. Please restart.');
                        }

                        // 🚫 NO PHONE CHECK HERE AT ALL
                        $registration->update([
                            'name' => $request->name,
                            'personal_phone' => $request->personal_phone,
                            'district' => $request->district,
                        ]);

                        $registrationId = $registration->id;
                    }

                    // 🔥 CASE 2: FIRST TIME CREATE ONLY
                    else {

                        $existing = BusinessRegistration::where('personal_phone', $request->personal_phone)->first();

                        if ($existing) {
                            return back()
                                        ->withInput()
                                        ->withErrors([
                                            'personal_phone' => 'This phone number is already registered!'
                                        ]);
                        }

                        $registration = BusinessRegistration::create($request->all());

                        session(['registration_id' => $registration->id]);

                        $registrationId = $registration->id;
                    }

                    return redirect()->back()
                        ->with('success', 'Step 1 completed')
                        ->with('step', 2)
                        ->with('registration_id', $registrationId);

        }
        catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()
                ->with('error', $e->getMessage())  
                ->withInput();
            }
    }

    public function storeStep2(Request $request,$id)
    { 
        try{
                $request->validate([

                            'email'=>'required|email',

                            'company_name'=>'required',

                            'password'=>'required',

                            'business_description'=>'required',

                            'business_phone'=>'required',

                            'business_address'=>'required',

                            'business_type'=>'required',

                            'registration_fees'=>'required|numeric',

                            'payment_proof'=>'file|mimes:jpg,png,pdf,svg,jpeg',

                            'business_image.*'=>'mimes:jpg,png,jpeg,svg|max:2048'
                ]);
               
               
                $data = BusinessRegistration::find($id);

                if($request->services_required){

                $services_required =implode(',',$request->services_required);

                }
        
                if($request->hasFile('payment_proof')){

                $payment_proof=$request->file('payment_proof')->store('uploads','public');

                }

                if($request->hasFile('business_image')){

                    $images=[];

                    foreach($request->file('business_image') as $image){

                    $path=$image->store('uploads','public');

                    $images[]=$path;

                    }

                    $business_image=implode(',',$images);
                }

                //BusinessRegistration::create($data);

                $data->update([
                            'email' => $request->email,

                            'business_description' => $request->business_description,

                            'company_name'=>$request->company_name,

                            'password'=>$request->password,

                            'business_phone'=>$request->business_phone,

                            'business_address'=>$request->business_address,

                            'business_type'=>$request->business_type,

                            'registration_fees'=>$request->registration_fees,

                            'payment_proof'=>$payment_proof,

                            'business_image'=>$business_image,

                            'services_required'=>$services_required
                ]);

                $pdf = Pdf::loadView('receipt', ['data' => $data]);

                $fileName = 'invoice_'.$data->id.'.pdf';
                // $filePath = public_path('receipts/'.$fileName);

                // // folder check
                // if (!file_exists(public_path('receipts'))) {
                //     mkdir(public_path('receipts'), 0777, true);
                // }

                $path = $_SERVER['DOCUMENT_ROOT'].'/receipts/'.$fileName;
                
                if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/receipts')) {
                    mkdir($_SERVER['DOCUMENT_ROOT'].'/receipts', 0777, true);
                }
                
                $pdf->save($path);



                Mail::to($request->email)
                ->cc('info@vipdigitalhub.com')
                ->send(new FormSubmittedMail($data));
                session()->forget(['step1', 'registration_id']);
                return redirect()->route('thank.you', ['id' => $data->id]);       
        }
        catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()
                ->with('error', $e->getMessage())  
                ->withInput();
            }
    }

    public function admin_registartion()
    {
        return view('admin_business.create');
    }

    // Store data
    public function admin_register_business(Request $request)
    {

        try{

            // $request->validate([
            //     'name' => 'required',
            //     'email' => 'required|email',
            //     'business_phone' => 'required',
            //     'business_name' => 'required',
            //     'business_type' => 'required',
            //     'address' => 'required',
            // ]);

            $services = $request->services_required;

            if($request->hasFile('payment_proof')){

                $payment_proof=$request->file('payment_proof')->store('uploads','public');

            }
            else {
                $payment_proof= '';
            }

            if($request->hasFile('business_image')){

                    $images=[];

                    foreach($request->file('business_image') as $image){

                    $path=$image->store('uploads','public');

                    $images[]=$path;

                    }

                    $business_image=implode(',',$images);
            }
            else {
                $business_image= '';
            }

            $data = [
                        'name' => $request->name,
                        'email' => $request->email,
                        'business_phone' => $request->business_phone,
                        'personal_phone' => $request->personal_phone,
                        'business_type' => $request->business_type,
                        'business_address' => $request->business_address,
                        'business_description' => $request->business_description,
                        'district' => $request->district,
                        'registration_fees' => $request->registration_fees,
                        'company_name' => $request->company_name,
                        'payment_proof'=>$payment_proof,
                        'business_image'=>$business_image,
                        'password' => $request->password,

                        'services_required' => isset($services) ? implode(',', $services) : null,
            ];

            BusinessRegistration::create($data);

            return back()->with('success', 'Registration submitted successfully');

        }

        catch (Exception $e) {
                dd($e->getMessage());
                return redirect()->back()
                    ->with('error', $e->getMessage())  
                    ->withInput();
        }
    }

}