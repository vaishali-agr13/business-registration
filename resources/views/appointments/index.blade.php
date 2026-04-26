@extends('layout.app')

@section('content')

<div class="container-fluid">

            <div class="card-header">

                <h3 class="card-title">Appointment List</h3>

                <div class="float-right">
                    <a href="{{ url('/admin/book-appointment') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Book Appointment
                    </a>
                </div>

            </div>

        <div class="card-body">
            @if($appointments->isEmpty())
                    <tr>
                        <p>No records found..</p>
                    </tr>
                                 
                    
            @else

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Service</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                                    @foreach($appointments as $key => $a)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $a->name }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>{{ $a->appointment_date }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($a->time_slot)->format('h:i A') }}
                                        </td>

                                        <td>{{ $a->service }}</td>

                                        <td>
                                            <!-- Status Badge -->
                                            <span class="badge 
                                                {{ $a->status == 'open' ? 'badge-success' : 'badge-danger' }}">
                                                {{ ucfirst($a->status) }}
                                            </span>
                                        </td>

                                        <td>
                                            <!-- Toggle Button -->
                                            <a href="{{ route('appointment.toggleStatus', $a->id) }}" 
                                            class="btn btn-sm 
                                            {{ $a->status == 'open' ? 'btn-danger' : 'btn-success' }}">
                                            
                                                {{ $a->status == 'open' ? 'Close' : 'Open' }}
                                            </a>

                                            <a href="{{ route('appointments.edit', $a->id) }}" class="btn btn-warning btn-sm">
                                                    Edit
                                            </a>

                                        <form action="{{ route('appointments.delete', $a->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">
                                                    Delete
                                                </button>
                                            </form>
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