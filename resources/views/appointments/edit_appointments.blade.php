@extends('layout.app')

@section('content')

<div class="container-fluid">

<div class="card">
    <div class="card-header">
        <h3>Edit Appointment</h3>
    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ $appointment->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ $appointment->email }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" value="{{ $appointment->phone }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="appointment_date" value="{{ $appointment->appointment_date }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Time</label>
                <input type="time" name="time_slot" value="{{ $appointment->time_slot }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Service</label>
                <input type="text" name="service" value="{{ $appointment->service }}" class="form-control">
            </div>

            <input type="hidden" name="created_by" value="admin">
            
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control">{{ $appointment->message }}</textarea>
            </div>

            <button class="btn btn-primary">Update</button>

        </form>

    </div>
</div>

</div>

@endsection