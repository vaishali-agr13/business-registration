<h2>Payment Receipt</h2>

<p><strong>Company:</strong> {{ $data->company_name }}</p>
<p><strong>Email:</strong> {{ $data->email }}</p>
<p><strong>Amount:</strong> ₹{{ $data->registration_fees }}</p>
<p><strong>Date:</strong> {{ date('d-m-Y') }}</p>

<hr>

<p>Thank you for your payment!</p>