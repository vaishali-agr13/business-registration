<h2>Payment Receipt</h2>

<p>Hi,</p>

<p>Your payment has been successfully received.</p>
<p><strong>Name :</strong>{{ $data->name }}</p>
<p><strong>Personal Mobile Number  :</strong>{{ $data->personal_phone }}</p>
<p><strong>Amount:</strong> ₹{{ $data->registration_fees }}</p>
<p><strong>Service :</strong> ₹{{ $data->services_required }}</p>
<p><strong>Payment Date:</strong> {{ $data->created_at }}</p>

<p>Thank you!</p>