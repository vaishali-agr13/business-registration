@extends('layout.app')

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">
            + Add Blog
        </a>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('uploads/'.$blog->image) }}" width="60">
                        @endif
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->description, 50) }}</td>
                    <td>{{ $blog->publish_date }}</td>

                    <td>
                        <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@stop