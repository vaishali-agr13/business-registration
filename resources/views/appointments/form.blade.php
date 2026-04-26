@extends('layout.app')

@section('content')

<div class="container-fluid">

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Book Appointment</h3>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="/admin/book-appointment">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" name="appointment_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Select Time Slot</label>
                <select name="time_slot" class="form-control">
                    @foreach($slots as $slot)
                        <option value="{{ $slot }}">{{ $slot }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Service</label>
                <input type="text" name="service" class="form-control">
            </div>

            <input type="hidden" name="created_by" value="admin">
            
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">Book Appointment</button>

        </form>

    </div>
</div>

</div>

@endsection