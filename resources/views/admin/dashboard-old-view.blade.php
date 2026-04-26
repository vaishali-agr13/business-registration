@extends('layout')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="col-md-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5>Total Registrations</h5>
                <h2>{{$total}}</h2>
                <a href="/admin/registrations" class="btn btn-primary mt-2">View All</a>
            </div>
        </div>
    </div>

</div>

@endsection