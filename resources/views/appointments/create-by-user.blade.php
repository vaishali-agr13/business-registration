<link rel="stylesheet" href="{{ asset('assets/css/form.css') }}" />


@extends('layout')

@section('content')


<div class="container py-5 form-wrapper">

<div class="col-md-8 col-lg-7 mx-auto">

<div class="card shadow-lg border-0 p-3">


<div class="card-body">


    <h4 class="text-center mb-4"> Appointment Booking</h4>

@if(session('success'))
    <div id="successMsg" style="color:#155724; background:#d4edda; border:1px solid #c3e6cb; padding:12px; border-radius:6px; font-weight:500;">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('successMsg').style.display = 'none';
        }, 3000);
    </script>
@endif

@if($errors->any())
    <div class="alert alert-danger" style="background:#fff2f2; border-left:5px solid red; padding:10px; margin-bottom:10px;">
        <strong style="color:red;">Please fix the following errors:</strong>
        <ul style="margin:5px 0 0 20px; color:#d10000;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





<form method="POST" action="{{route('book-appointment')}}">
@csrf

<h5 class="mb-3 section-heading">👤 Basic Information</h5>

<div class="row">

    <div class="col-md-6 mb-3">
        <label>Your Name</label>
        <input type="text" name="name" placeholder="  Enter Your Name"
        value="{{ $step1['name'] ?? '' }}" required class="form-control custom-input">
    </div>

    <div class="col-md-6 mb-3">
        <label>Email</label>
        <input type="email" name="email" placeholder="  Enter Your Email ID"
        value="{{ $step1['email'] ?? '' }}" required class="form-control custom-input">
    </div>

    <div class="col-md-6 mb-3">
        <label>Phone</label>
        <input type="number" name="phone" placeholder="  Enter Your Phone"
        value="{{ $step1['phone'] ?? '' }}" required class="form-control custom-input">
    </div>

    <div class="col-md-6 mb-3">
        <label>Appointment Date</label>
        <input type="date" name="appointment_date" id="appointment_date"
        class="form-control custom-input" required>
    </div>

    <div class="col-md-6 mb-3">
        <label>Time Slot</label>
        <div class="custom-select-wrapper">
            <select required name="time_slot">
                <option value="">Select Time Slot</option>
                @foreach($slots as $slot)
                    <option>{{ $slot }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label>Service</label>
        <input type="text" name="service" placeholder="  Enter Service"
        required class="form-control custom-input" required>
    </div>

    <div class="col-md-12 mb-3">
        <label>Message</label>
        <input type="text" name="message" placeholder="  Enter Your Message"
        class="form-control custom-input" required>
    </div>

</div>

<a href="/" class="btn home-btn">Home</a>
<button type="submit" class="btn next-btn">Submit</button>

</form>


</div>



</div>

</div>

</div>

</div>


@endsection







