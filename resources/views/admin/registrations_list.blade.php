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

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
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