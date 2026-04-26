<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentBooked;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth; 

class AppointmentController extends Controller
{

   public function index()
        {
            $appointments = Appointment::latest()->get();

            return view('appointments.index', compact('appointments'));
        }
    public function create()
        {
            $slots = [
                '10:00 AM',
                '11:00 AM',
                '12:00 PM',
                '02:00 PM',
                '03:00 PM',
                '04:00 PM',
            ];

            return view('appointments.form', compact('slots'));
        }


        public function createByUser()
        {
            $slots = [
                '10:00 AM',
                '11:00 AM',
                '12:00 PM',
                '02:00 PM',
                '03:00 PM',
                '04:00 PM',
            ];

            return view('appointments.create-by-user', compact('slots'));
        }


        



           public function storeByUser(Request $request)
            {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'appointment_date' => 'required|date',
                    'phone'=>'required',
                    'time_slot' => 'required'
                ]);

                $time = date("H:i:s", strtotime($request->time_slot));


                // Double booking check
                $exists = Appointment::where('appointment_date', $request->appointment_date)
                    ->where('time_slot', $time)
                    ->exists();

                if ($exists) {
                    return back()->with('error', 'This slot is already booked!');
                }


                $appointment = Appointment::create([
                        'name' => $request->name,
                        'user_id'=>Auth::id(),
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'appointment_date' => $request->appointment_date,
                        'time_slot' => $time, // ✅ converted
                        'service' => $request->service,
                        'message' => $request->message,
                        'created_by'=>'user',
                ]);

                    Mail::to($request->email)->send(new AppointmentBooked($appointment));

                return back()->with('success', 'Appointment Booked Successfully');
            }


        public function store(Request $request)
            {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'appointment_date' => 'required|date',
                    'phone'=>'required',
                    'time_slot' => 'required'
                ]);

                $time = date("H:i:s", strtotime($request->time_slot));


                // Double booking check
                $exists = Appointment::where('appointment_date', $request->appointment_date)
                    ->where('time_slot', $time)
                    ->exists();

                if ($exists) {
                    return back()->with('error', 'This slot is already booked!');
                }

                if ($request->created_by == 'admin') {
                        $data['created_by'] = 'admin';
                } 
                else {
                        $data['created_by'] = 'user';
                }


                $appointment = Appointment::create([
                        'name' => $request->name,
                        'user_id'=>Auth::id(),
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'appointment_date' => $request->appointment_date,
                        'time_slot' => $time, // ✅ converted
                        'service' => $request->service,
                        'message' => $request->message,
                        'created_by'=>$data['created_by'],
                ]);

                    Mail::to($request->email)->send(new AppointmentBooked($appointment));

                return back()->with('success', 'Appointment Booked Successfully');
            }
        public function toggleStatus($id)
            {
                $appointment = Appointment::findOrFail($id);

                // toggle
                $appointment->status = $appointment->status == 'open' ? 'closed' : 'open';
                $appointment->save();

                return back()->with('success', 'Status updated successfully');
            }

        public function edit($id)
        {
            $appointment = Appointment::findOrFail($id);
            return view('appointments.edit_appointments', compact('appointment'));
        }

        // UPDATE
        public function update(Request $request, $id)
        {
            $appointment = Appointment::findOrFail($id);

            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'appointment_date' => 'required|date',
                'time_slot' => 'required'
            ]);

            $appointment->update($request->all());

            return redirect()->route('appointments.index')
                ->with('success', 'Appointment updated successfully');
        }

        // DELETE
        public function destroy($id)
        {
            $appointment = Appointment::findOrFail($id);
            $appointment->delete();

            return back()->with('success', 'Appointment deleted successfully');
        }
}
