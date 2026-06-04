@extends('layout.app')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5">
              {{ $blog->description }}
                </textarea>
            </div>

            @php
                $date = $blog->publish_date 
                    ? \Carbon\Carbon::parse($blog->publish_date)->format('Y-m-d') 
                    : '';
            @endphp

            <input type="date" name="publish_date" value="{{ $date }}" class="form-control">
            @if($blog->image)
            <img src="{{ asset('uploads/'.$blog->image) }}" width="100">
            @endif

            <input type="file" name="image" class="form-control mb-2">

            <button class="btn btn-primary">Update</button>
        </form>

    </div>
</div>

@stop