    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />



<div style="position: relative; margin-bottom: 20px;">
    <h3 style="margin:0;">Business Details</h3>

    <a href="{{ url()->previous() }}" class="logout-btn"
       style="position:absolute; right:0; top:0;">
        ← Back
    </a>
</div>

<div class="card">

<div class="card-body">

<p><b>Name :</b> {{$data->name}}</p>

<p><b>Company Name :</b> {{$data->company_name}}</p>

<p><b>Email:</b> {{$data->email}}</p>

<p><b>Personal Phone:</b> {{$data->personal_phone}}</p>

<p><b>Business Phone:</b> {{$data->business_phone}}</p>

<p><b>Business Address:</b> {{$data->business_address}}</p>

<p><b>District:</b> {{$data->district}}</p>

<p><b>Business Type:</b> {{$data->business_type}}</p>

<p><b>Description:</b> {{$data->business_description}}</p>

<p><b>Services:</b> {{$data->services_required}}</p>

<p><b>Registration Fees:</b> {{$data->registration_fees}}</p>

<p>

<b>Payment Proof:</b>

@if($data->payment_proof)

<a href="/admin/download/{{basename($data->payment_proof)}}">
 <img src="{{asset('storage/'.$data->payment_proof)}}" width="150" class="me-2 mb-2">
</a>

@endif

</p>

<p>

<b>Business Poster:</b>

@php
$images = explode(',', $data->business_image);
@endphp

@foreach($images as $img)
<a href="/admin/download/{{basename($img)}}">

     <img src="{{asset('storage/'.$img)}}" width="150" class="me-2 mb-2">
</a>


@endforeach

</p>

</div>

</div>



<style>
   .header {
  height: 80px;
  z-index: 999;
}


     </style>
