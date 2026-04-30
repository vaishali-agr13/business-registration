@extends('layout.app')

@section('content')

<div class="container-fluid">

    <div class="card">
        <div class="card-header">
                    <h3 class="card-title">Registrations</h3>
                    <div class="float-right">
                            <a href="{{ url('/admin/register-business') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Register 
                            </a>
                    </div>

        </div>

        <div class="card-body">
            <form method="GET" action="{{ url()->current() }}" class="mb-3 p-3 bg-light rounded shadow-sm">
                <div class="row">

                    <div class="col-md-3">
                        <label class="form-label">Business Name</label>
                        <input type="text" name="name" class="form-control"
                            placeholder="Enter business name"
                            value="{{ request('name') }}">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control"
                            placeholder="Enter email"
                            value="{{ request('email') }}">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control"
                            placeholder="Enter phone"
                            value="{{ request('phone') }}">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">From Date</label>
                        <input type="date" name="from_date" class="form-control"
                            value="{{ request('from_date') }}">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label">To Date</label>
                        <input type="date" name="to_date" class="form-control"
                            value="{{ request('to_date') }}">
                    </div>

                    <div class="col-md-2 d-flex flex-column justify-content-end">
    
                        <label class="form-label invisible">Action</label>

                        <div style="display: inline-flex; gap: 10px;">
                            <button type="submit" class="btn btn-primary">Filter</button>
                            <a href="{{ url()->current() }}" class="btn btn-secondary">Reset</a>
                        </div>

                    </div>

                </div>
            </form>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Business Phone</th>
                        <th>Personal Phone</th>
                        <th>Business Address</th>
                        <th>District</th> 
                        <th>Business Type</th>
                        <th>Business Description</th> 
                        <th>Services Required</th>
                        <th>Registration Fees</th> 
                        <th>Payment Proof</th> 
                        <th>Business Image</th> 
                        <th>Company Name</th> 
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                @if($data->isEmpty())
                      <p>No records found</p>
                @else
                                @foreach($data as $key => $registration)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $registration->name }}</td>
                                    <td>{{ $registration->email }}</td>
                                    <td>{{ $registration->business_phone }}</td>
                                    <td>{{ $registration->personal_phone }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit( $registration->business_address, 10, '...') }}</td>
                                    <td>{{ $registration->district }}</td>
                                    <td>{{ $registration->business_type }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit( $registration->business_description, 10, '...') }}</td>
                                    <td>{{ $registration->services_required }}</td>
                                    <td>{{ $registration->registration_fees }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $registration->payment_proof) }}" target="_blank">
                                            View
                                        </a>
                                    </td>

                                    <td>
                                        <a href="{{ asset('storage/' . $registration->business_image) }}" target="_blank">
                                            View
                                        </a>
                                    </td>

                                    <td>{{ $registration->company_name }}</td>
                                    <td>{{ $registration->created_at->format('d M Y') }}</td>
                                    <td>
                                        <a href="{{ route('registrations.show', $registration->id) }}" class="btn btn-primary">
                                                view details
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                    @endif
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection