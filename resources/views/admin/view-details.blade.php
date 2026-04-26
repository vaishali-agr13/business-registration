@extends('layout.app')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between mb-3">
        <h2>Registration Details</h2>

        <a href="{{ url('/admin/registrations') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Business Information</h3>
        </div>

        <div class="card-body">

            <div class="row">

                <!-- Left Column -->
                <div class="col-md-6">

                    <div class="form-group">
                        <label><b>Name</b></label>
                        <p>{{ $registration->name }}</p>
                    </div>

                    <div class="form-group">
                        <label><b>Email</b></label>
                        <p>{{ $registration->email }}</p>
                    </div>

                    <div class="form-group">
                        <label><b>Phone</b></label>
                        <p>{{ $registration->phone }}</p>
                    </div>

                    <div class="form-group">
                        <label><b>Business Name</b></label>
                        <p>{{ $registration->business_name }}</p>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="col-md-6">

                    <div class="form-group">
                        <label><b>Business Type</b></label>
                        <p>{{ $registration->business_type }}</p>
                    </div>

                    <div class="form-group">
                        <label><b>Address</b></label>
                        <p>{{ $registration->address }}</p>
                    </div>

                    <div class="form-group">
                        <label><b>Registration Date</b></label>
                        <p>{{ $registration->created_at->format('d M Y') }}</p>
                    </div>

                    <div class="form-group">
                        <label><b>Status</b></label>
                        <p>
                            <span class="badge 
                                @if($registration->status == 'approved') badge-success
                                @elseif($registration->status == 'rejected') badge-danger
                                @else badge-warning
                                @endif
                            ">
                                {{ $registration->status }}
                            </span>
                        </p>
                    </div>

                </div>

            </div>

        </div>

        <!-- Footer Actions -->
        <div class="card-footer text-right">

            <a href="#" class="btn btn-success">
                <i class="fas fa-check"></i> Approve
            </a>

            <a href="#" class="btn btn-danger">
                <i class="fas fa-times"></i> Reject
            </a>

        </div>

    </div>

</div>

@endsection